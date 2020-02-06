<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
//get post variable
$capName = $_POST['CapName'];
$capAge = $_POST['CapAge'];
$shipName = $_POST['ShipName'];
$earlyYears = array();
if($file = fopen("EarlyYears.txt", 'r')){
    while(!feof($file)){
        array_push($earlyYears, fgets($file));
    }
}
fclose($file);

$tours = array();

if($file = fopen("Tours.txt", 'r')){
    while(!feof($file)){
        array_push($tours, fgets($file));
    }
}
fclose($file);


?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="row">
                    <div class="col-2"></div>
                    <div class="col-8">
                        <?php
                        print("<p class='title'>Captain ".$capName." At the Age of ".$capAge." took over the Ship ".$shipName."</p>");
                        // put your code here

                        ?>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
