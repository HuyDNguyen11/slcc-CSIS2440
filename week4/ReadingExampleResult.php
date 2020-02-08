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
        <link href="../bootstrap/css/freelancer.min.css" rel="stylesheet" type="text/css"/>

        <style media="screen">
            .title{
                color: #d75813;
            }
            .txt{
                color: #ffffff;

            }
            .head{
                color: #6abed8;
            }
            body{
                background-color: #040404;
            }
        </style>
    </head>
    <body>

        <div class="container-fluid">
            <div class="row">
                <br>
            </div>
            <div class="row">
                <div class="row">
                    <div class="col-2"></div>
                    <div class="col-8">

                        <?php
                        // put your code here
                        $len = sizeof($earlyYears) - 1;
                        print("<p class='title'>Captain ".$capName." At the Age of ".$capAge." took over the Ship ".$shipName."</p>");
                        print("<br>");
                        print("<p class='head'>The early Career started with:</p>");
                        print("<ul>");
                        $first = rand(0, $len);
                        do{
                            $second = rand(0, $len);
                        }while($first == $second);
                        print("<li class='txt'>".$earlyYears[$first]."</li><br>");
                        print("<li class='txt'>".$earlyYears[$second]."</li>");
                        print("</ul><br>");

                        $len = sizeof($tours) - 1;
                        $first = rand(0, $len);
                        do{
                            $second = rand(0, $len);
                        }while($first == $second);
                        print("<p class='head'>After becoming the Ship Captain, Capt. ".$capName." has taken the Ship and the Crew on many tours, though many adventures: </p><br>");
                        print("<ul>");
                        print("<li class='txt'>".$tours[$first]."</li><br>");
                        print("<li class='txt'>".$tours[$second]."</li>");
                        print("</ul><br>");

                        ?>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
