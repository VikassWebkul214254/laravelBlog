<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CommentRequest;
use App\Models\BlogsComment;

class CommentController extends Controller
{

    public function update(CommentRequest $request , $blog_id , $user_id)
    {
       
        
        $Commented = BlogsComment::create(['email'=>$request->email,'comment'=> $request->comment,'blog_id'=>$blog_id , 'customer_id'=>$user_id]);
        return redirect('/blogdeatils/show/17   ')->with('success', "Account successfully registered.");
    }
}
