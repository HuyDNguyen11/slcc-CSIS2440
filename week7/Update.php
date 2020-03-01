<?php

$update = "update heroku_521233846929941.Planets set `Active` = 'Y'";//write the update statment
if ($description != "A short description of the planet") {
    $update .= ", `Description` = '$description'";//add the description
}
$update .= "WHERE (`PlanetName`  = '". $name . "')";//add the where clause
$success = $conn->query($update);
if ($success == FALSE) {
    $failmess = "Whole query ". $update. "<br>";
    echo $failmess;
    die('Invalid query: '.$conn->error);
} else {
    echo $name . "was given a space station<br>";}
