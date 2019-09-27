<!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <h1 class="text-center text-uppercase display-4 font-weight-bold" style="background-color: #74B3CE; color: white; font-family: 'Cormorant Unicase', serif;"> {{ session('heading') }} </h1>
</head>
<body>
  <div class="dropdown text-right">
    <button type="button" class="btn btn-primary dropdown-toggle text-uppercase" data-toggle="dropdown">
      {{ session('name') }}
    </button>
    <div class="dropdown-menu">
      <a class="dropdown-item btn-primary" href="{{ route('posts.logout')}}">Log out </a>
    </div>
  </div>

<!-- -->

  @yield('body')
<!--  -->
  </body>
</html>
