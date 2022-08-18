<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class blogController extends Controller
{

 
    public function form()
    {
        //user Id
        $users = Auth::user();
        return view('blog.form',compact('users'));
    }
   
    public function register(Request $request)
    {   
        $blogadded = Blog::create($request->all());
        return redirect()->route('user.index')
                        ->with('success','Blog created successfully.');
    }

    
}