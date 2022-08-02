<header class="p-3 bg-dark text-white">
  <div class="container">
    <div class="row">
     
      @auth
        <div class="float-right">
          <a href="{{ route('home.index') }}" class="btn btn-success">Home</a>
          <a href="{{ route('user.index') }}" class="btn btn-danger">Account</a>
          <a href="{{ route('logout.perform') }}" class="btn btn-info">Logout</a>
        </div>
      @endauth

      @guest
        <div class="float-right">
          <a href="{{ route('home.index') }}" class="btn btn-success">Home</a>
          <a href="{{ route('login.perform') }}" class="btn btn-outline-light me-2">Login</a>
          <a href="{{ route('register.perform') }}" class="btn btn-warning">Sign-up</a>
        </div>
      @endguest
    </div>
  </div>
</header>