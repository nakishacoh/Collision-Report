<?php
// ***** OUR PHP CODE ***** \\

// receive values from form
$name = $_GET['name'];
$address = $_GET['address'];
$lat = $_GET['lat'];
$lng = $_GET['lng'];
$type = $_GET['type'];

// check admin table for valid username and password
$dsn = "mysql:host=localhost;dbname=carsokai_collision_report;charset=utf8mb4";
$dbusername = "carsokai_imm";
$dbpassword = "AdpteGfKipeuOuJx";

// connect to database
$pdo = new PDO($dsn, $dbusername, $dbpassword);

// prepare insert
$stmt = $pdo->prepare("INSERT INTO `location`(`id`, `name`, `address`, `lat`, `lng`, `type`) VALUES (NULL, '$name', '$address', '$lat', '$lng', '$type')");

// insert into database
$stmt->execute();


// ***** GOOGLE PHP CODE ***** \\

// // Connect to database
// $username = "carsokai_imm";
// $password = "AdpteGfKipeuOuJx";
// $database = "carsokai_imm-carsokai_collision_report";
//
// // Gets data from URL parameters
// $name = $_GET['name'];
// $address = $_GET['address'];
// $lat = $_GET['lat'];
// $lng = $_GET['lng'];
// $type = $_GET['type'];
//
// // Opens a connection to a MySQL server
// $connection = mysql_connect ("localhost", $username, $password);
// if (!$connection) {
//     die('Not connected : ' . mysql_error());
// }
//
// // Sets the active MySQL database
// $db_selected = mysql_select_db($database, $connection);
// if (!$db_selected) {
//     die ('Can\'t use db : ' . mysql_error());
// }
//
// // Inserts new row with place data
// $query = sprintf("INSERT INTO location " .
//          " (id, name, address, lat, lng, type ) " .
//          " VALUES (NULL, '%s', '%s', '%s', '%s', '%s');",
//          mysql_real_escape_string($name),
//          mysql_real_escape_string($address),
//          mysql_real_escape_string($lat),
//          mysql_real_escape_string($lng),
//          mysql_real_escape_string($type));
//
// $result = mysql_query($query);
//
// if (!$result) {
//     die('Invalid query: ' . mysql_error());
// }
?>
