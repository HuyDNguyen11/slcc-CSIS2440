<?php
$host = 'us-cdbr-iron-east-04.cleardb.net';
$user = 'bc5308ef732f00';
$password = '9dbbb8d8';
$dbname = 'heroku_521233846929941';
$conn = new mysqli($host, $user, $password);
$conn->query("USE $dbname;");

$res = $conn->query("show columns from planets;");
$row = $res->fetch_assoc();
print_r($row);
$row = $res->fetch_assoc();
print_r($row);

?>
