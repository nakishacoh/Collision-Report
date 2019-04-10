<?php
// session_start();
// receive values from form
$driverFirstName = $_POST['driverFirstName'];
$driverLastName = $_POST['driverLastName'];
$driverPhone = $_POST['driverPhone'];

//check admin table for valid username and password
$dbusername = "razaalin_alina";
$dbpassword = "iZKoDeSbtiPLYSGT";
$pdo = new PDO("mysql:host=localhost;dbname=razaalin_collision-report", $dbusername, $dbpassword);

// prepare insert
$stmt = $pdo->prepare("UPDATE `reports`
 SET `driverFirstName` = '$driverFirstName',
`driverLastName` = '$driverLastName',
 `driverPhone` = '$driverPhone'
WHERE reports.`reportID` = 1");
	// insert into database;

// insert into database
$stmt->execute();


// redirect user to next section of form
// header("Location: /collision-report/form/#notesForm");
?>
