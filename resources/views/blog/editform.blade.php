@extends('layouts.app-master')

@section('content')
@auth
<br/>


<br/>
<div class="card blog-section">
    <div class="card-header"><h3 class="fw-normal">Update Blog</h3></div>
    <div class="card-body">
        <form method="post" action="{{ route('blog.update' , $blog->id) }}">
        <input type="hidden" class="form-control" name="customer_id" value="{{ $users->id }}" placeholder="Title" required="required" autofocus>  
            <div class="form-group">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <label>Blog Titile</label>
                    <input type="text" class="form-control" name="blog_title" value="{{ $blog->blog_title }}" placeholder="Title" required="required" autofocus>  
            </div>
            <div class="form-group">
                    <label>Blog Description</label>
                    <textarea type="text" class="form-control" name="blog_desc"placeholder="Blog Description" required="required">{{ $blog->blog_desc }}</textarea>
            </div>
            <div class="form-group">
                    <label>Status</label>
                    <select class="form-control" name="status">
                        @if ($blog->status == 1){
                            <option value="0">Disable</option>
                            <option value="1" selected>Enable</option>
                        @else
                            <option value="0" selected>Disable</option>
                            <option value="1">Enable</option>
                        @endif
                    </select>
            </div>

            <button class="btn btn-primary" type="submit">Update</button>
        </form>
    </div>
</div>
@else
    User Not Login
@endauth
@endsection