<!DOCTYPE html>

{!! Session::get("msg", '') !!}
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container">
      <div class="card" style="background-color: #E9EBBD;width: 440px; left: 279px;">
        <div class="card-body">
          <!-- <form class="" action="{{ route('emailVarify')}}" method="post"> -->
          <form class="" action="{{ route('sendEmail')}}" method="post">
            @csrf
            <div class="form-label-group">
              <label for="inputEmail">Email : </label>
              <input type="email" id="inputEmail" class="form-control" name="email" placeholder="Email" required autofocus>
            </div><br><br>
            <div class="form-label-group row justify-content-between">
              <div class="col-4">
                <button type="button" class="btn btn-warning text-left" name="button"><a href="{{route('posts.login')}}">Back</a></button>
              </div>
              <div class="col-3">
                <input type="submit" class="btn btn-warning" name="submit">
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
