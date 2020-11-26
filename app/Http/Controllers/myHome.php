<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Illuminate\Support\Facades\DB;
class myHome extends Controller
{
    // home page 
    public function index(){
        $categories =DB::table('categories')
                ->limit(5)
                ->get();
        return view('index',compact('categories'));
    }
    public function student(){
        $all_cat =Category::all();
        // dd($all_cat);
        return view('index',['all_cat' => $all_cat]);
    }
    public function doctor(){
        $all_cat =Category::all();
        // dd($all_cat);
        return view('index',['all_cat' => $all_cat]);
    }
    // public function admin(){
    //     // return view('layouts.admin_dashboard');
    //     return view('admin.home');
    // }

}
