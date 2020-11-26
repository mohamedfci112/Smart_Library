<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Book; 
use App\Category; 
use App\Author; 
use App\Publisher; 
use App\Cupbord; 

class BookController extends Controller
{

    public function index()
    {
        // return view('book.index'); 
        // $books= []; 
        $books = Book::latest()->paginate(5);

        return view('book.index',compact('books'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function create()
    {
        $categories = Category::all(); 
        $authors    = Author::all();
        $publishers = Publisher::all();
        $cupbords = Cupbord::all();
        
        // dd($authors);
        return view('book.create', compact('categories','authors','publishers','cupbords'));
    }

    public function store(Request $request)
    {
        request()->validate([
        'Bookcover'=> 'required|image|mimes:jpeg,png,jpg,gif,svg',
    
        ]);
        
        // dd($request->bookcover);
        // $image_name =$request->bookcover;
        // $request->bookcover->move(public_path('images'), $image_name );
        // $request->bookcover = $image_name ; 
        
        $imageName = time().'.'.request()->Bookcover->getClientOriginalName();
        $book_name = request()->name;
        // dd($imageName); 

        request()->Bookcover->move(public_path('images'), $imageName);
        $inputs = $request->all();
        
        $inputs['created_by'] =  \Auth::user()->name;
        $inputs['Bookcover']  = $imageName ; 
        // dd($inputs['isbn'] );
        // dd($inputs);
        
        Book::create($inputs);
        // Auth::user()->name
        DB::insert('insert into logs (admin_name, logActivity, created_at) values (?, ?,?)', [\Auth::user()->name ,'added this book('.$book_name.')' , now()] ); 
            
        return redirect()->route('book.index')
                        ->with('success','book created successfully');
    }


    
    public function show($id)
    {
        $book = Book::find($id);
        $author = DB::table('authors')
        ->select('name')
        ->where('id',$book->author_id)
        ->first();
        $publisher = DB::table('publishers')
        ->select('name')
        ->where('id',$book->publisher_id)
        ->first();
        $category = DB::table('categories')
        ->select('name')
        ->where('id',$book->category_id)
        ->first();
        $cupbord = DB::table('cupbords')
        ->select('id')
        ->where('id',$book->cupbord_id)
        ->first();
        // dd($publisher);
    
        // $category = Category::select('name')->where('id',$book->category_id)->get();;
        // $author = Author::select('name')->where('id',$book->category_id)->get();;
        // $publisher = Publisher::select('name')->where('id',$book->category_id)->get();;
        // $cupbord = Cupbord::select('id')->where('id',$book->category_id)->get();;
        // dd($author->name);

        return view('book.show',compact('book','category','author','publisher','cupbord'));
    }

    public function edit($id)
    {
        $book = Book::find($id);
        $categories = Category::all(); 
        $authors    = Author::all();
        $publishers = Publisher::all();
        $cupbords = Cupbord::all();

        return view('book.edit',compact('book','categories','authors','publishers','cupbords'));
    }
    
    public function update(Request $request, $id)
    {
        request()->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        Book::find($id)->update($request->all());
        $book = Book::find($id);
        $book_name = $book->name; 
        DB::insert('insert into logs ( admin_name, logActivity , created_at) values (?, ?, ?)', [\Auth::user()->name  ,' updated   this book('.$book_name.')',now() ]);
    
        return redirect()->route('book.index')
                        ->with('success','book updated successfully');
    }

    public function destroy($id)
    {
        $book = Book::find($id);
        $book_name = $book->name; 
        Book::find($id)->delete();

        DB::insert('insert into logs ( admin_name, logActivity , created_at) values (?, ?, ?)', [\Auth::user()->name  ,'delete   this book('.$book_name.')' ,now()]);
    
        return redirect()->route('book.index')
                        ->with('success','book deleted successfully');
    }
}
