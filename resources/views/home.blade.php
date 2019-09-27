<!DOCTYPE html>
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
    <div class="card text-center" style="background-color: #E9EBBD;">
          <div class="card-header text-uppercase">
              Home page in laravel
          </div>
          <div class="card-body text-uppercase">
            <h3></h3>
          </div>
          <div class="card-footer">
              <button type="button" class="btn btn-success" ><a class="btn btn-success" href="{{ route('posts.index') }}">Crud operation</a></button>
              <button type="button" class="btn btn-success" ><a class="btn btn-success" href="{{ route('patients') }}">Services</a></button>
          </div>
      </div>
    </div>
  </body>
</html>
