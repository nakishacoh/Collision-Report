<?php
// session_start();
// receive values from form
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$password = $_POST['password'];

// check admin table for valid username and password
$dsn = "mysql:host=localhost;dbname=carsokai_collision_report;charset=utf8mb4";
$dbusername = "carsokai_imm";
$dbpassword = "AdpteGfKipeuOuJx";

// connect to database
$pdo = new PDO($dsn, $dbusername, $dbpassword);

// prepare insert
$stmt = $pdo->prepare("INSERT INTO `users` (`userID`, `firstname`, `lastname`, `email`, `password`)	VALUES (NULL, '$fname', '$lname', '$email', '$password')");

// insert into database
$stmt->execute();

// redirect user to dash
// header("Location: /Collision-Report/dashboard");
?>
