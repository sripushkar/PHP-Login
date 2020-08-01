<?php
session_start();
//Connection to DB. Change as necessary. In the DB, there should be a table called login, which has a username and a password column.
$mysqli = new mysqli('localhost', 'root', 'root', 'loginSystem');

//Grabs the username and password from the form.
$username = $_POST['username'];
$password = $_POST['password'];
$_SESSION['message'] = null;
$_SESSION['loginStatus'] = false;

//Formats fields to avoid SQL Injection
$username = stripcslashes($username);
$password = stripcslashes($password);
$username = $mysqli->real_escape_string($username);
$password = $mysqli->real_escape_string($password);

$failedLogin = "Login failed. Please try again.";

$login = $mysqli->query("SELECT * FROM login WHERE username='$username' AND password='$password'");

if($login->num_rows == 0){
  $_SESSION['message'] = $failedLogin;
  header("location: index.php");
}
else{
  $_SESSION['loginStatus'] = true;
  header("location: welcome.php");
}

?>
