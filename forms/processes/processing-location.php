<?php
// session_start();
// receive values from form
$address = $_POST['address'];
$city = $_POST['city'];

//check admin table for valid username and password
$dbusername = "razaalin_alina";
$dbpassword = "iZKoDeSbtiPLYSGT";
$pdo = new PDO("mysql:host=localhost;dbname=razaalin_collision-report", $dbusername, $dbpassword);

// prepare insert
$stmt = $pdo->prepare("
	INSERT INTO `reports` (
	`reportID`, 
	`userID`, 
	`address`,
	`city`,
	`driverFirstName`,
	`driverLastName`,
	`driverPhone`,
	`image`,
	`notes`,
	`date`,
	`time`,
	`injuries`)
	VALUES (NULL, NULL, '$address','$city', NULL,  NULL,  NULL, NULL, NULL, NULL, NULL, NULL)");

// insert into database
$stmt->execute();

// redirect user to next section of form
// header("Location: /collision-report/form/#notesForm");
?>
