@extends('layouts.app-master')

@section('content')
    <br/>
    <h1>{{ $blog->blog_title }}</h1>
    <p>{{ $blog->blog_desc }}</p>
    <small>Created By: &nbsp;<b>{{ $user->username }}</b></small>
    <small>Time: &nbsp; <b>{{ $blog->updated_at }}</b></small>

    <br/>
    <br/>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">{{ $message }}</div>
    @endif
    <form action="{{ route('comment.add',[$blog->id,$user->id] ) }}" method="post">
        @csrf
        <h3>Comment: </h3>
        @if ($userloging == true)
            <input type="hidden" value="{{ $user->email }}" class="form-control" name="email" placeholder="Email" />
        @else

        <div class="mb-3">
            <input type="text" value="{{ old('email') }}" class="form-control" name="email" placeholder="Email" />
            @if ($errors->has('email'))
                <span class="text-danger text-left">{{ $errors->first('email') }}</span>
            @endif
        </div>

        @endif
        <div class="mb-3">
            <textarea name="comment" class="form-control" placeholder="Text.....">{{ old('comment') }}</textarea>
            @if ($errors->has('comment'))
                <span class="text-danger text-left">{{ $errors->first('comment') }}</span>
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <br/>
    @foreach($blogcomments as $blogcomment)
    <div class="card">
        <div class="card-body">
            {{ $blogcomment->comment }}

            <p>
               <small>{{ $blogcomment->email }}</small>
            </p>
            <p><small class="float-right"><b>Created At: </b>{{ \Carbon\Carbon::parse($blog->updated_at)->diffForhumans() }}</small></p>
        </div>
    </div>
    <br/>
    @endforeach

    @endsection
