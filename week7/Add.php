<?php
//write your insert statment
$insert = "INSERT into heroku_521233846929941.Planets (`idPlanet`,`PlanetName`, `PosX`, `PosY`, `PosZ`, `Description`, `faction`)
                    values(21, '$name', $x, $y, $z, '$description', '$faction' )";
//echo $insert;
$success = $conn->query($insert);

if ($success == FALSE) {
    echo $success->error;
} else {
    echo "Planet ".$name." is added.";
}
