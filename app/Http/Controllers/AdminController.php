<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

use App\Book; 
use App\Category; 
use App\Visitor;
use App\User;
use App\Comment;
use App\Post;
use App\Author; 
use App\Publisher; 
use App\Cupbord; 
use App\Issue; 

class AdminController extends Controller
{
    //
    public function index(){
        //counts of all tables 


        if (\Auth::user()->approve == 0)
        {
            return  redirect('/');
        }
        $books_count      = Book::count();
        $categories_count = Category::count(); 
        $authors_count    = Author::count();
        $publishers_count = Publisher::count();
        $cupbords_count   = Cupbord::count();
        $visitors_count    = Visitor::count(); 
        $users_count      = User::count();
        $posts_count      = Post::count();
        $comments_count   = Comment::count();
        $issues_count     = Issue::count();
        

        $latest_registered_members = DB::table('users')->orderBy('created_at', 'desc')->limit(8)->get();
        $latest_visitors = DB::table('visitors')->orderBy('created_at', 'desc')->limit(8)->get();
        $latest_logs = DB::table('logs')->orderBy('created_at', 'desc')->limit(8)->get();
        $latest_books = DB::table('books')->orderBy('created_at', 'desc')->limit(8)->get();
        // dd($latest_registered_members);
        return view('admin.home',compact('books_count','categories_count','authors_count','publishers_count','cupbords_count','visitors_count','users_count','posts_count','comments_count','issues_count','latest_registered_members','latest_visitors','latest_logs','latest_books'));
    }
}
