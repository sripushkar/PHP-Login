<?php

//Connection to DB. Change as necessary. In the DB, there should be a table called login, which has a username and a password column.
$mysqli = new mysqli('localhost', 'root', 'root', 'loginSystem');


//Grabs the username and password from the form.
$username = $_POST['username'];
$password = $_POST['password'];

//Formats fields to avoid SQL Injection
$username = stripcslashes($username);
$password = stripcslashes($password);
$username = $mysqli->real_escape_string($username);
$password = $mysqli->real_escape_string($password);

?>
