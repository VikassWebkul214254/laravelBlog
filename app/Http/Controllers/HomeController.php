<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Blog;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
   
    public function index()
    {

        // $blogs =  Blog::all();
        // $users = User::all();


        $blogs = DB::table('blogs')
            ->join('users', 'blogs.customer_id', '=', 'users.id')
            ->select('blogs.*','users.username')
            ->get();

       return view('home.index',array('blogs'=>$blogs));
    }

}
