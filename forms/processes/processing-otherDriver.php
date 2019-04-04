<?php
//session_start();
//receive username and passowrd
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$number = $_POST['number'];

//check admin table for valid username and password
$dbusername = "razaalin_alina";
$dbpassword = "iZKoDeSbtiPLYSGT";
$pdo = new PDO("mysql:host=localhost;dbname=razaalin_collision-report", $dbusername, $dbpassword);


$stmt = $pdo->prepare("
	INSERT INTO `otherDriver` (`driverID`, `firstname`, `lastname`, `number`) 
	VALUES (NULL, '$firstname', '$lastname', '$number')");

$stmt->execute();
	header("Location: /collision-report/form/#notesForm");

?>
