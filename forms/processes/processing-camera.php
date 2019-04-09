<?php

$uploaddir = 'http://localhost/collision-report/forms/images/';
$uploadfile = $uploaddir . basename($_FILES['image']['name']);
// if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile)) {
//     header("Location: dashboard.php");
// } else {
//     echo "Possible file upload attack!\n";
// }
// echo "Here is some more debugging info:";
// print_r($_FILES);

$image = $uploadfile;

$dsn = "mysql:host=localhost;dbname=carsokai_collision_report;charset=utf8mb4";
$dbusername = "carsokai_imm";
$dbpassword = "AdpteGfKipeuOuJx";

$pdo = new PDO($dsn, $dbusername, $dbpassword);

$stmt = $pdo->prepare("INSERT INTO `camera` (`cameraID`, `image`) VALUES (NULL,'$image')");

$stmt->execute();

?>
