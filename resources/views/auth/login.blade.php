@extends('layouts.auth-master')
@include('layouts.partials.navbar')
@section('content')
<div class="card login-section">
    <div class="card-header"><h3 class="fw-normal">Login</h3></div>
    <div class="card-body">
        <form method="post" action="{{ route('login.perform') }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            @include('layouts.partials.messages')
            <div class="form-group mb-3">
                <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Username" required="required" autofocus>
                <label for="floatingName">Email or Username</label>
                @if ($errors->has('username'))
                    <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                @endif
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Password" required="required">
                <label for="floatingPassword">Password</label>
                @if ($errors->has('password'))
                    <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                @endif
            </div>
            
            <button class="float-left btn btn-primary" type="submit">Login</button>
            
        </form>
        <a href="{{ route('register.perform') }}"><button class="float-right btn btn-danger">Register</button></a>
    </div>
</div>
@endsection