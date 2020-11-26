<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Issue; 
use App\User ;
use App\Book ;

class IssueController extends Controller
{
    public function index()
    {   
        $issues = Issue::latest()->paginate(5);
        return view('issue.index',compact('issues'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    
    public function create()
    {
        $books_name = Book::all(['id','title']);
        $users_name = user::all(['id','name']);
        // dd($books_name);

        return view('issue.create',compact('books_name','users_name'));
    }

    public function store(Request $request)
    {
        request()->validate([
            'return_date' => 'required',
        ]);
        $book_id  = request()->book_id; 
        $book = Book::find($book_id);
        // dd($book);
        

        if($book->avilable == 0 ){
            return redirect()->route('issue.index')
                        ->with('danger','this book not avilable in library');
        }

        $inputs = $request->all(); 
        // dd($book->title);
        $inputs['book_name'] = $book->title;
        $inputs['book_id'] = $book->id;


        //update the avilable attributes in  book table 
        $book->avilable = $book->avilable -1 ; 
        $book->save();
        
        Issue::create($inputs);
        
        $user_name = request()->user_name; 
        DB::insert('insert into logs (admin_name, logActivity, created_at) values (?, ?,?)', [\Auth::user()->name ,'issue book to('.$user_name.')' , now()] ); 
        return redirect()->route('issue.index')
                        ->with('success','issue created successfully');

    }

    public function show($id)
    {
        $issue = Issue::find($id);
        return view('issue.show',compact('issue'));
    }

    public function edit($id)
    {
        $issue = Issue::find($id);

        $books_name = Book::all(['id','title']);
        $users_name = user::all(['id','name']);

        return view('issue.edit',compact('issue','books_name','users_name'));
    }

    public function update(Request $request, $id)
    {
        // request()->validate([
        //     'name' => 'required',
        //     'description' => 'required',
        // ]);
        Issue::find($id)->update($request->all());
        $issue = Issue::find($id);
        $book_name = $issue->book_name; 
        DB::insert('insert into logs (admin_name, logActivity, created_at) values (?, ?,?)', [\Auth::user()->name ,'update  this book  (' .$book_name. ')' , now() ] ); 
        return redirect()->route('issue.index')
                        ->with('success','issue book  updated successfully');
    }

    public function destroy($id)
    {
        
        $issue = Issue::find($id);
        $book_name = $issue->book_name; 
        $book = Book::find($issue->book_id);
        $book->avilable = $book->avilable + 1 ; 
        $book->save();
        
        Issue::find($id)->delete();
        
        DB::insert('insert into logs (admin_name, logActivity, created_at) values (?, ?,?)', [\Auth::user()->name ,'return   book('.$book_name.')' , now()] ); 
    
        return redirect()->route('issue.index')
                        ->with('success','issue deleted successfully');
    }
}
