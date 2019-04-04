<?php
//session_start();
//receive username and passowrd
$notes = $_POST['notes'];
$date = $_POST['date'];
$time = $_POST['time'];

//check admin table for valid username and password
$dbusername = "razaalin_alina";
$dbpassword = "iZKoDeSbtiPLYSGT";
$pdo = new PDO("mysql:host=localhost;dbname=razaalin_collision-report", $dbusername, $dbpassword);


$stmt = $pdo->prepare("
	INSERT INTO `notes` (`notesID`, `notes`, `date`, `time`) 
	VALUES (NULL, '$notes', '$date', '$time')");

$stmt->execute();
	header("Location: /collision-report/form/#notesForm");

?>
