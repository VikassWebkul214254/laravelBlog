@extends('layouts.app-master')

@section('content')

    <h1>{{ $blog->blog_title }}</h1>
    <p>{{ $blog->blog_desc }}</p>
    <small>Created By: &nbsp;<b>{{ $user->username }}</b></small>
    <small>Time: &nbsp; <b>{{ $blog->updated_at }}</b></small>

    <br/>
    <br/>
     
    <form action="{{ route('comment.add',[$blog->id,$user->id] ) }}" method="post">
        @csrf

    
    <h3>Comment: </h3>
        <div class="mb-3">
            <label>Email</label>
            <input type="text" value="{{ old('email') }}" class="form-control" name="email" placeholder="Email" />
            @if ($errors->has('email'))
                <span class="text-danger text-left">{{ $errors->first('email') }}</span>
            @endif
        </div>    
        <div class="mb-3">
            <label>Comment</label>
            <textarea name="comment" class="form-control" placeholder="Comment.....">{{ old('comment') }}</textarea>
            @if ($errors->has('comment'))
                <span class="text-danger text-left">{{ $errors->first('comment') }}</span>
            @endif
        </div>
  

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    @endsection