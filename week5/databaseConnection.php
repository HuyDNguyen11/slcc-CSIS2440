<?php
$host = 'localhost';
$user = 'HuyDNguyen';
$password = 'Huynguyen1';
$dbname = 'CSIS2440';
$conn = new mysqli($host, $user, $password);
$conn->query("USE CSIS2440;");

$res = $conn->query("show columns from Planets;");
$row = $res->fetch_assoc();
print_r($row);
$row = $res->fetch_assoc();
print_r($row);
s
?>
