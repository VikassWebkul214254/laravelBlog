<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index() 
    {   

       // $users = User::all();
        $users = Auth::user();
        $blogs = Blog::where('customer_id',Auth::user()->id)->get();
      
        return view('user.index',array('users'=>$users,'blogs'=>$blogs));
    }

    public function edit($id)
    {
        $users = User::findOrFail($id);
 
        return view('user.form', compact('users'));
    }

    public function update(Request $request, User $user)
    {
       
        $request->validate([
            'username' => 'required',
            'email' => 'required',
            ]);

        $user->update($request->all());

        return redirect()->route('user.index')->with('success','Post updated successfully');
    }
}
