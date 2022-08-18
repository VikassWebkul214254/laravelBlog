@extends('layouts.app-master')

@section('content')
@auth

    <div class="row">
        <div class="col-8">
            </br><h3 class="text-center">Blog List</h3>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">{{ $message }}</div>
                    @endif
                <div class="text-right">
                    <a href="{{ route('blog.form') }}" class="btn btn-danger">Create Blog</a>
                </div>
            <br/>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                @if ($blogs)
                    @foreach ($blogs as $blog)
                    <tr>
                        <td>{{ $blog->blog_title }}</td>
                        <td>{{ Str::limit($blog->blog_desc,10) }}</td>
                        <td>
                            @if ($blog->status == 1)
                                Enable
                            @else
                                Disable
                            @endif
                        </td>
                        <td>
                            <form action="{{ route('blog.destroy',$blog->id) }}" method="POST">

                                <a class="btn btn-primary" href="{{ route('blog.edit',$blog->id) }}">Edit</a>

                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>



                        </td>
                    </tr>
                    @endforeach
                @else
                    <tr><td>NO RECORD FOUND</td></tr>
                @endif
                </tbody>
            </table>
        </div>
        <div class="col-2">
            </br><h3 class="text-center">Profile</h3>
            <table class="table table-bordered">

                <tbody>
                    <tr>
                        <th>UserName: </th>
                        <td>{{$users->username}}</td>
                    </tr>
                    <tr>
                        <th>Email: </th>
                        <td>{{$users->email}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    @else
        <h3>User Not Login</h3>
    @endauth



@endsection
