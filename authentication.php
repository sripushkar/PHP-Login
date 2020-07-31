<?php

//Connection to DB. Change as necessary. In the DB, there should be a table called login, which has a username and a password column.
$mysqli = new mysqli('localhost', 'root', 'root', 'loginSystem');

//Grabs the username and password from the form.
$username = $_POST['username'];
$password = $_POST['password'];

//Formats fields to avoid SQL Injection
$username = stripcslashes($username);
$password = stripcslashes($password);
$username = mysqli_real_escape_string($con, $username);
$password = mysqli_real_escape_string($con, $password);

//Login selection query
$result = $mysqli->query("SELECT * FROM login WHERE username = '$username' AND password = '$password';");

$row = $result->fetch_assoc();

if($row['username'] == $username and $row['password'] == $password){
  echo $row['username'];
  // $_SESSION["message"] = "Login Successful!";
  // $_SESSION["msgType"] = "success";
  // header("location: index.php");
}
else{
  echo '<h1>Unsuccessful</h1>';
  // $_SESSION["message"] = "Login Failed. Please try again.";
  // $_SESSION["msgType"] = "danger";
  // header("location: index.php");
}

 ?>
