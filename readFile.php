<?php
$file = file_get_contents('RaceInfo.txt');
$race = explode('}', $info);

#$char = array("Human" => $race[0], "Elf" => $race[1], "Halfling" => $race[2], "Dward" => $race[3]);

function printChar(){
    echo $race;
}

?>
