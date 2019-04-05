<?php
// session_start();
// receive username and password
$email = $_POST['email'];
$password = $_POST['password'];

// check admin table for valid username and password
$dbusername = "razaalin_alina";
$dbpassword = "iZKoDeSbtiPLYSGT";
$pdo = new PDO("mysql:host=localhost;dbname=razaalin_collision-report", $dbusername, $dbpassword);

$stmt = $pdo->prepare("
    INSERT INTO `users` (`userID`, `firstname`, `lastname`, `email`, `password`)
    VALUES (NULL, NULL, NULL, '$email', '$password')");

$stmt->execute();

header("Location: /collision-report/");

?>
