<?php
// session_start();
// receive username and password
$injuries = $_POST['injuries'];

// check admin table for valid username and password
$dbusername = "razaalin_alina";
$dbpassword = "iZKoDeSbtiPLYSGT";
$pdo = new PDO("mysql:host=localhost;dbname=razaalin_collision-report", $dbusername, $dbpassword);

$stmt = $pdo->prepare("
	INSERT INTO `injuries` (`injuryID`, `injury`)
	VALUES (NULL, '$injuries')");

$stmt->execute();

header("Location: /collision-report/form/#confirmationForm");

?>
