<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User ;
class UserController extends Controller
{
    public function index()
    {
        $users = User::latest()->paginate(5);
        return view('user.index',compact('users'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
     
    public function show($id)
    {
        $user = User::find($id);
        return view('user.show',compact('user'));
    }


     
     
    public function destroy($id)
    {
        user::find($id)->delete();
        return redirect()->route('user.index')
                        ->with('success','user deleted successfully');
    }
}
