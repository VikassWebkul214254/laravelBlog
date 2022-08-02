<!doctype html>
<html lang="en">
    <head>
   
    <title>Blog System</title>

    <!-- Bootstrap core CSS -->
    <link href="{!! url('assets/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet">

   

    
</head>
<body>
    
    @include('layouts.partials.navbar')

    <div class="container">
        @yield('content')
    </div>

  
  </body>
</html>