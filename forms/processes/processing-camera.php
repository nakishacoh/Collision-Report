<?php

$dbusername = "razaalin_alina";
$dbpassword = "iZKoDeSbtiPLYSGT";
$pdo = new PDO("mysql:host=localhost;dbname=razaalin_collision-report", $dbusername, $dbpassword);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$image = ($_FILES['fileToUpload']);
$target_file = NULL;
$image_url = NULL;
$root = $_SERVER['DOCUMENT_ROOT'];


if (isset($_FILES['fileToUpload'])){
	$target_dir =  '/Collision-Report/form/images/';
	$target_file = "$root" . "$target_dir" . basename($_FILES["fileToUpload"]["name"]);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], '/'.$target_file);
}

$image_url = basename($_FILES["fileToUpload"]["name"]);


try {

 $stmt = $pdo->prepare("UPDATE `reports`
	SET `image` = '$image_url'
	WHERE reports.`reportID` = 1");
	$stmt->execute();
}catch (PDOException $e){
	throw $e;
}

?>




