<?php
session_start();
$mysqli = new mysqli('localhost', 'root', 'root', 'loginSystem');

$username = $_POST['username'];
$password = $_POST['password'];
$_SESSION['message'] = null;
$_SESSION['loginStatus'] = false;

//Formats fields to avoid SQL Injection
$username = stripcslashes($username);
$password = stripcslashes($password);
$username = $mysqli->real_escape_string($username);
$password = $mysqli->real_escape_string($password);

if(strlen($username) < 6 || strlen($username) > 20){
  $_SESSION['message'] = "Username must be between 6-20 characters.";
  header("location: register.php");
  die();
}

if(strlen($password) < 6){
  $_SESSION['message'] = "Password must be at least 6 characters";
  header("location: register.php");
  die();
}

$duplicateUser = $mysqli->query("SELECT * FROM login WHERE username = '$username';");

if($duplicateUser->num_rows != 0){
  $_SESSION['message'] = "This username already exists. Please try again";
  header("location: register.php");
  die();
}
else{
  $register = $mysqli->query("INSERT INTO login (username, password) VALUES ('$username', '$password');");
  header("location: welcome.php");
  $_SESSION['loginStatus'] = true;
  die();
}

 ?>
