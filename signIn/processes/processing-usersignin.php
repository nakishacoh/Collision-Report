<?php
session_start();
$email = $_POST['email'];
$password = $_POST['password'];


//check admin table for valid username and password
$dbusername = "razaalin_alina";
$dbpassword = "iZKoDeSbtiPLYSGT";

$pdo = new PDO("mysql:host=localhost;dbname=razaalin_collision-report", $dbusername, $dbpassword);



$stmt = $pdo->prepare("
	SELECT * FROM `users` 
	WHERE `email` = '$email' 
	AND `password` = '$password'");

	
$stmt->execute();

if($row = $stmt->fetch()){
	//start session if valid and redirect to dashboard
	$_SESSION['logged-in'] = true;
	$_SESSION['username'] = $row['firstname'];
	$_SESSION['usertype'] = 'user';
	$_SESSION['userID'] = $row['userID'];
	

	header("Location: /Collision-Report/dashboard");

}else{
	//redirect to login page if invalid
	header("Location: /Collision-Report/signIn/index.php");
}
?>