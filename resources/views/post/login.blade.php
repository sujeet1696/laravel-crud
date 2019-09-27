<!DOCTYPE html>
<script type="text/javascript">
  data = {{ Cookie::get('user') }};
  console.log(data);
</script>

@php
  $userEmail = '';
  $userPassword = '';
  if(isset($msg)) {
    echo "<script>alert('$msg')</script>";
  }
@endphp

{!! Session::get("msg", '') !!}
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Cormorant+Unicase" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cormorant+Unicase|Eater" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Anton|Cormorant+Unicase" rel="stylesheet">
  </head>
  <body>
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <img src="https://icon-library.net/images/sign-in-icon/sign-in-icon-3.jpg" class="card-title text-center" alt="Smiley face" height="80" width="80">
            <h5 class="card-title text-center">Sign In</h5>
            <form class="form-signin" action="{{ route('posts.verify')}}" method="post">
              @csrf
              <div class="form-label-group">
                <label for="inputEmail">Email address</label>
                <input type="email" id="inputEmail" class="form-control" name="email" placeholder="Email address"
                  value="{{ Cookie::get('user_email') }}" required autofocus>
              </div>

              <div class="form-label-group">
                <label for="inputPassword">Password</label>
                <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" value="{{ Cookie::get('user_password') }}" required>
              </div>

              <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" name="customCheck" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Remember password</label>
              </div>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Sign in</button>
            </form>
            <div class="">
              <br><p>Don't have an account
                ? &nbsp<a href="{{ route('signUp') }}">Sign Up</a></p>
            </div>
            <div class="text-right">
              <a href="{{ route('email') }}">Forgot your password</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
