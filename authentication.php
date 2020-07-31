<?php
/*
$username = $_POST['username'];
$password = $_POST['password'];

//Formats fields to avoid SQL Injection
$username = stripcslashes($username);
$password = stripcslashes($password);
$username = mysqli_real_escape_string($con, $username);
$password = mysqli_real_escape_string($con, $password);

$result = $mysqli->query("SELECT * FROM login WHERE username = '$username' AND password = '$password';");

$row = $result->fetch_assoc();
$count = $result->num_rows;

if($count == 1){
  $_SESSION["message"] = "Login Successful!";
  $_SESSION["msgType"] = "success";
  header("location: index.php");
}
else{
  $_SESSION["message"] = "Login Failed. Please try again.";
  $_SESSION["msgType"] = "danger";
  header("location: index.php");
}
*/
 ?>
