<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Author; 
class AuthorController extends Controller
{
    
    public function index()
    {   
        $authors = Author::latest()->paginate(5);
        return view('author.index',compact('authors'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    
    public function create()
    {
        return view('author.create');
    }

    public function store(Request $request)
    {
        // request()->validate([
        //     'name' => 'required',
        //     'description' => 'required',
        // ]);
        Author::create($request->all());

        $author_name = request()->name; 

        DB::insert('insert into logs (admin_name, logActivity) values (?, ?)', ['mahmoud ahmded ' ,'added this author('.$author_name.')' ]);
        return redirect()->route('author.index')
                        ->with('success','author created successfully');
    }

    public function show($id)
    {
        $author = Author::find($id);
        return view('author.show',compact('author'));
    }

    public function edit($id)
    {
        $author = Author::find($id);
        return view('author.edit',compact('author'));
    }

    public function update(Request $request, $id)
    {
        // request()->validate([
        //     'name' => 'required',
        //     'description' => 'required',
        // ]);
        Author::find($id)->update($request->all());
        return redirect()->route('author.index')
                        ->with('success','author updated successfully');
    }

    public function destroy($id)
    {
        $author = Author::find($id);
        $author_name = $author->name; 
        
        Author::find($id)->delete();

        DB::insert('insert into logs ( admin_name, logActivity ) values (?, ?)', ['mahmoud ahmded ' ,'delete   this author('.$author_name.')' ]);
    
        return redirect()->route('author.index')
                        ->with('success','author deleted successfully');
    }
}
