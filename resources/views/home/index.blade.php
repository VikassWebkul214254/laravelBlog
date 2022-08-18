@extends('layouts.app-master')

@section('content')
<br/>
    @if ($blogs)
    <div class="row">
        @foreach ($blogs as $blog)
       
            <div class="col-4">
                <div class="card">  
                    <div class="card-header"><a href="{{ route('blog.view',$blog->id) }}">{{ $blog->blog_title }}</a></div>
                    <div class="card-body">
                        {{ Str::limit($blog->blog_desc,30) }}
                    </div>
                    <div class="card-footer">
                    <small>Post By <b>{{ $blog->username }}</b> </small>
                    <small class="float-right">Time: <b>{{ $blog->updated_at }}</b></small>
                    </div>
                </div>
                <br/>
            </div>
        
            
        @endforeach
        
    </div>
    @endif 

@endsection