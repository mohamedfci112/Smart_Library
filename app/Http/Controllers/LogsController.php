<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Log; 
class LogsController extends Controller
{

    public function index()
    {
        // return view('book.index'); 
        // $books= []; 
        $logs = Log::latest()->paginate(5);

        return view('log.index',compact('logs'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function delete_all_logs(){
        Log::all()->delete();
        return redirect()->route('log.index')
                        ->with('success','logs  fully deleted  successfully');
    }
    
}
