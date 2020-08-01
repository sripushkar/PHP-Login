<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <title>Welcome</title>
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
    <?php
      session_start();
      if($_SESSION["loginStatus"] == false){
        header("location: login.php");
      }
      if(isset($_POST['logout'])){
        $_SESSION["loginStatus"] = false;
        header("location: index.php");
      }
     ?>
    <div class="container d-flex justify-content-center" style="padding-top: 2vh">
      <div class="text-center">
        <h1 class="text-center">Welcome!</h1>
        <form name="log out" class="" action="welcome.php" method="POST">
          <input type="hidden" name="l" value="l">
          <input type="submit" name="logout" value="Log Out" class="btn btn-primary">
        </form>
      </div>
    </div>
  </body>
</html>
