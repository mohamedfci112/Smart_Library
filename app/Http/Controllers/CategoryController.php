<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
// use App\Auth; 
use App\Category; 
use App\User ;

class CategoryController extends Controller
{
    public function index()
    {   
        $categories = Category::latest()->paginate(5);
        return view('categories.index',compact('categories'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    
    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        request()->validate([
            'name' => 'required',
            'description' => 'required',
        ]);
        
        
        Category::create($request->all());
        $category_name = request()->name; 
        // $created_by = $request->created_by ; 
        // dd($created_by);

        DB::insert('insert into logs (admin_name, logActivity,created_at) values (?, ? , ?)', [ $created_by ,'this category ('.$category_name.')'.'added by '.$created_by, now()]);
        return redirect()->route('categories.index')
                        ->with('success','categories created successfully');
    }

    public function show($id)
    {
        $category = Category::find($id);
        return view('categories.show',compact('category'));
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('categories.edit',compact('category'));
    }

    public function update(Request $request, $id)
    {
        request()->validate([
            'name' => 'required',
            'description' => 'required',
        ]);
        Category::find($id)->update($request->all());
        $category = Category::find($id);
        $created_by = \Auth::user()->name;
        $category_name = $category->name; 
        DB::insert('insert into logs (admin_name, logActivity,created_at) values (?, ?, ?)', [ $created_by , 'updated  this category('.$category_name.')', now() ]);
        return redirect()->route('categories.index')
                        ->with('success','categories updated successfully');
    }

    public function destroy($id)
    {
        
        $category = Category::find($id);
        $category_name = $category->name; 
        $created_by = \Auth::user()->name;
        
        Category::find($id)->delete();
        DB::insert('insert into logs ( admin_name, logActivity , created_at) values (?, ?,?)', [ $created_by ,'delete category('.$category_name.') ', now() ]);
    
        return redirect()->route('categories.index')
                        ->with('success','categories deleted successfully');
    }
}
