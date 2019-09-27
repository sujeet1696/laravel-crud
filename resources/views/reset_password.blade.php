<!DOCTYPE html>

<!-- @if(isset($data->email))
  {!! $data->msg !!}
@endif -->
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
            <form class="" action="{{ route('forgotPassword')}}" method="post">
              @csrf
              <input type="hidden" name="email" value="sujeet.kumar@ksolves.com">
              <div class="form-label-group">
                <label for="inputPassword">Password : </label>
                <input type="password" id="inputPassword" class="form-control" name="password" placeholder="password" required autofocus>
              </div>
              <div class="form-label-group">
                <label for="inputPassword">Confirm password : </label>
                <input type="password" id="inputPassword" class="form-control" name="confirm_password" placeholder="confirm_password" required autofocus>
              </div><br><br>
              <div class="form-label-group text-right">
                <input type="submit" name="submit" class="btn btn-warning">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
