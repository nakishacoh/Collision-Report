<?php
// session_start();
// receive values from form
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$number = $_POST['number'];

// check admin table for valid username and password
$dsn = "mysql:host=localhost;dbname=carsokai_collision_report;charset=utf8mb4";
$dbusername = "carsokai_imm";
$dbpassword = "AdpteGfKipeuOuJx";

// connect to database
$pdo = new PDO($dsn, $dbusername, $dbpassword);

// prepare insert
$stmt = $pdo->prepare("
	INSERT INTO `otherDriver` (`driverID`, `firstname`, `lastname`, `number`)
	VALUES (NULL, '$firstname', '$lastname', '$number')");

// insert into database
$stmt->execute();

// redirect user to next section of form
// header("Location: /collision-report/form/#notesForm");
?>
