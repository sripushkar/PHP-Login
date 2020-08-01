<?php
$mysqli = new mysqli('localhost', 'root', 'root', 'loginSystem');

$username = $_POST['username'];
$password = $_POST['password'];
$_SESSION['message'] = "";

//Formats fields to avoid SQL Injection
$username = stripcslashes($username);
$password = stripcslashes($password);
$username = $mysqli->real_escape_string($username);
$password = $mysqli->real_escape_string($password);

$duplicateUser = $mysqli->query("SELECT * FROM login WHERE username = '$username';");

if($duplicateUser->num_rows != 0){
  $_SESSION['message'] = "This username already exists. Please try again";
  header("location: register.php");
}
else{
  $register = $mysqli->query('INSERT INTO login (username, password) VALUES ("$username", "$password");');
  header("location: welcome.php");
}

 ?>
