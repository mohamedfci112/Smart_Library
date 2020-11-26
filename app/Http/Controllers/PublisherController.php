<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Publisher; 
class PublisherController extends Controller
{
    //
    public function index()
    {   
        $publishers = Publisher::latest()->paginate(5);
        return view('publisher.index',compact('publishers'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    
    public function create()
    {
        return view('publisher.create');
    }

    public function store(Request $request)
    {
        // request()->validate([
        //     'name' => 'required',
        //     'description' => 'required',
        // ]);
        Publisher::create($request->all());

        $publisher_name = request()->name; 

        DB::insert('insert into logs (admin_name, logActivity) values (?, ?)', ['mahmoud ahmded ' ,'added this publisher('.$publisher_name.')' ]);
        return redirect()->route('publisher.index')
                        ->with('success','Publisher created successfully');
    }

    public function show($id)
    {
        $publisher = Publisher::find($id);
        return view('publisher.show',compact('publisher'));
    }

    public function edit($id)
    {
        $publisher = Publisher::find($id);
        return view('publisher.edit',compact('publisher'));
    }

    public function update(Request $request, $id)
    {
        // request()->validate([
        //     'name' => 'required',
        //     'description' => 'required',
        // ]);
        Publisher::find($id)->update($request->all());


        $publisher = Publisher::find($id);
        $publisher_name = $publisher->name; 
        DB::insert('insert into logs ( admin_name, logActivity ) values (?, ?)', ['mahmoud ahmded ' ,'update   this publisher('.$publisher_name.')' ]);
    
        return redirect()->route('publisher.index')
                        ->with('success','Publisher updated successfully');
    }

    public function destroy($id)
    {
        $publisher = Publisher::find($id);
        $publisher_name = $publisher->name;
         
        Publisher::find($id)->delete();

        DB::insert('insert into logs ( admin_name, logActivity ) values (?, ?)', ['mahmoud ahmded ' ,'deleted   this publisher('.$publisher_name.')' ]);
    
        return redirect()->route('publisher.index')
                        ->with('success','Publisher deleted successfully');
    }
}
