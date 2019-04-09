<?php
// receive values from form
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$message = $_POST['message'];

// check admin table for valid username and password
$dsn = "mysql:host=localhost;dbname=carsokai_collision_report;charset=utf8mb4";
$dbusername = "carsokai_imm";
$dbpassword = "AdpteGfKipeuOuJx";

// connect to database
$pdo = new PDO($dsn, $dbusername, $dbpassword);

// prepare insert
$stmt = $pdo->prepare("INSERT INTO `contact` (`firstname`, `lastname`, `email`, `message`) VALUES ('$firstname', '$lastname', '$email', '$message');");

// insert into database
$stmt->execute();

// redirect user to next section of form
// header("Location: http://192.168.64.2/Collision-Report/signIn/index.php")
?>
