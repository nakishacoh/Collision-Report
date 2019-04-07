<?php
// session_start();
// receive values from form
$notes = $_POST['notes'];
$date = $_POST['date'];
$time = $_POST['time'];

// check admin table for valid username and password
$dsn = "mysql:host=localhost;dbname=carsokai_collision_report;charset=utf8mb4";
$dbusername = "carsokai_imm";
$dbpassword = "AdpteGfKipeuOuJx";

// connect to database
$pdo = new PDO($dsn, $dbusername, $dbpassword);

// prepare insert
$stmt = $pdo->prepare("
	INSERT INTO `notes` (`notesID`, `notes`, `date`, `time`)
	VALUES (NULL, '$notes', '$date', '$time')");

// insert into database
$stmt->execute();

// redirect user to next section of form
// header("Location: /collision-report/form/#injuriesForm");
?>
