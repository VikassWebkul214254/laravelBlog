@extends('layouts.app-master')

@section('content')

<br/>
<br/>

<form action="{{route('user/update/'.$users->id)}}" method="post">
@csrf
@method('POST')
        <div class="form-group form-floating mb-3">
            <input type="email" class="form-control" name="email" value="{{ $users->email }}" placeholder="name@example.com" required="required" autofocus>
            <label for="floatingEmail">Email address</label>
        </div>
        <div class="form-group form-floating mb-3">
            <input type="text" class="form-control" name="username" value="{{ $users->username }}" placeholder="Username" required="required" autofocus>
            <label for="floatingName">Username</label>
        </div>
   
        <button class="w-100 btn btn-lg btn-primary" type="submit">Update</button>
</form> 


@endsection