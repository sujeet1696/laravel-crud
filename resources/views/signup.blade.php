<!DOCTYPE html>

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
            <h5 class="card-title text-center">Register</h5>
            <form class="form-signin" action="{{ route('userverify')}}" method="post">
              @csrf
              <div class="form-label-group">
                <label for="inputEmail">name : </label>
                <input type="text" id="inputName" class="form-control" name="name" placeholder="Name" required autofocus>
              </div>
              <div class="form-label-group">
                <label for="inputEmail">Email address</label>
                <input type="email" id="inputEmail" class="form-control" name="email" placeholder="Email address" required>
              </div>
              <div class="form-label-group">
                <label for="inputPassword">Password</label>
                <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required>
              </div>
              <div class="form-label-group">
                <label for="inputPassword">Confirm Password</label>
                <input type="password" id="inputPassword" class="form-control" name="confirm_password" placeholder="Confirm Password" required>
              </div><br>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Register</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
