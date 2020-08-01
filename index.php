<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <title>title</title>
    <link rel="stylesheet" href="stylesheet.css" type="text/css">
    <script src="scripts.js"> </script>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </head>
  <body>
    <div class="row justify-content-center">
      <form name="login" action="loginAuth.php" method="POST">
        <h2 style="padding-bottom:4%; padding-top:1vh;">Login:</h2>
        <div class="form-group">
          <input type="username" name="username" placeholder="Username" class="form-control">
        </div>
        <div class="form-group">
          <input type="password" name="password" placeholder="Password" class="form-control">
        </div>
        <div class="form-group">
          <button type="submit" name="submit" class="btn btn-primary">Log In</button>
        </div>
        <div class="form-group">
          <a href="register.php" class="badge badge-primary">Don't have an account? Register: </a>
        </div>
      </form>

    </div>

  </body>
</html>
