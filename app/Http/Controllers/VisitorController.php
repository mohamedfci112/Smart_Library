<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Visitor; 
use App\User; 

class VisitorController extends Controller
{

    public function index()
    {   
        $visitors = Visitor::latest()->paginate(5);
        return view('visitor.index',compact('visitors'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    
    public function create()
    {
        $existing_users = DB::table('users')->orderBy('name','asc')->get();

        return view('visitor.create',compact('existing_users'));
    }

    public function insert_registered_user(Request $request){
        $user_id = $request->input('user_id'); 
        $using_type = $request->input('using_type'); 
        // dd($user_id);

        $user = DB::table('users')->select('name','image')->where('id' , $user_id)->first(); 
        $name = $user->name;
        $image = $user->image;
        
        // if( DB::table('visitors')->select('name')->where('name',$name)  )
        // {
        //     dd(DB::table('visitors')->select('name')->where('name',$name) );
        // }

        // dd($image)
        DB::table('visitors')->insert(
            ['name' => $name , 'image' => $image , 'using_type' => $using_type ]
        );

        $visitor_name = request()->name; 

        DB::insert('insert into logs (admin_name, logActivity) values (?, ?)', ['mahmoud ahmded ' ,'added this publisher('.$visitor_name.')' ]);
    

        return redirect()->route('visitor.create')
                        ->with('success',' visitor added  successfully');
                        
    }

    public function store(Request $request)
    {
        // request()->validate([
        //     'name' => 'required',
        //     'description' => 'required',
        // ]);

        $user_id = $request->input('user_id'); 
        // dd($user_id);
        $user = DB::table('users')->select('name','image')->where('id' , $user_id)->first(); 
        // dd($user);



        Visitor::create($request->all());
        return redirect()->route('visitor.index')
                        ->with('success','visitor created successfully');
    }

    public function show($id)
    {
        $visitor = Visitor::find($id);
        return view('visitor.show',compact('visitor'));
    }

    public function edit($id)
    {
        $visitor = Visitor::find($id);
        return view('visitor.edit',compact('visitor'));
    }

    public function update(Request $request, $id)
    {
        // request()->validate([
        //     'name' => 'required',
        //     'description' => 'required',
        // ]);
        Visitor::find($id)->update($request->all());
        return redirect()->route('visitor.index')
                        ->with('success','visitor updated successfully');
    }

    public function destroy($id)
    {
        $visitor = Visitor::find($id);
        $visitor_name = $visitor->name; 
        
        Visitor::find($id)->delete();


        DB::insert('insert into logs ( admin_name, logActivity ) values (?, ?)', ['mahmoud ahmded ' ,'deleted   this visitor('.$visitor_name.')' ]);
    
        return redirect()->route('visitor.index')
                        ->with('success','visitor deleted successfully');
    }

}
