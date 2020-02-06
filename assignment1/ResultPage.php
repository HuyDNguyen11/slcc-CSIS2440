<!DOCTYPE html>
<?php
$info = $_POST;
#read file for character information
$file = file_get_contents('RaceInfo.txt');
$race = explode('}', $file);
$file = file_get_contents('ClassInfo.txt');
$class = explode('}', $file);
    #assign information to arrays
$charRace = array("Human" => $race[0] .'}' , "Elf" => $race[1] .'}', "Dwarf" => $race[2].'}', "Halfling" => $race[3].'}');
$charCls = array("Fighter" => $class[0] .'}' , "Cleric" => $class[1] .'}', "Thief" => $class[2].'}', "Magic-User" => $class[3].'}');

#functions
//generate the name of the image file from the information from $info variable
function imgGen($info){
    $gend = $info["gender"];
    if($info["gender"] == ""){
        $gend = "Female";
    }
    $img = substr($info['Race'],0, 2).substr($info['Class'], 0, 2).substr($gend, 0, 2).".jpg";
    return $img;
}

//generate random stat for character in range of (3, 18)
function statGen(){
    $stat = array("Str" => rand(3, 18), "Con" => rand(3, 18), "Dex" => rand(3, 18),
                    "Wis" => rand(3, 18), "Int" => rand(3, 18), "Cha" => rand(3, 18));
    return $stat;
}
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>A made Adventurer</title>
        <!-- Custom fonts for this theme -->
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

        <!-- Theme CSS -->

        <link href="css/freelancer.min.css" rel="stylesheet" type="text/css"/>
        <style>
            img {
                height: 250px;
                padding: 3pt;
            }
            p{
                margin-left: 8px;
            }
        </style>
    </head>

    <body>
        <div id="CharacterSheet" class="container">
            <div class="row">
                <h3 class="Content">The Brave Adventurer</h3>
            </div>
            <div class="row">
                 <div class="col-md-3">
                    <?php
                    //print random stats here
                    $stats = statGen();
                    foreach($stats as $stat => $val){
                        print("$stat : $val <br>");
                    }
                    ?>
                </div>
                <div class="col-md-5">

                        <?php
                       //print character info here
                       print('<header class="text-center">');
                       print("<h4>$info[HeroName] from $info[KingdomName]</h4>");
                       print("<b>$info[Race] $info[Class]</b> at the age $info[Age]");
                       print('</header>');
                       print($charRace[$info['Race']]);
                       print('</br>');
                       print($charCls[$info['Class']]);

                        ?>
                    </header>

                </div>
                <div class="col-md-4">
                    <img src="" alt="">
                    <?php
                    //print image here
                    print("<img src=images/".imgGen($info)." alt =' ' >");
                    ?>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JavaScript -->
        <script src="vendor/jquery/jquery.min.js" type="text/javascript"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js" type="text/javascript"></script>

        <!-- Plugin JavaScript -->
        <script src="vendor/jquery-easing/jquery.easing.min.js" type="text/javascript"></script>

        <!-- Contact Form JavaScript -->
        <script src="js/jqBootstrapValidation.min.js" type="text/javascript"></script>
        <script src="js/contact_me.min.js" type="text/javascript"></script>

        <!-- Custom scripts for this template -->
        <script src="js/freelancer.min.js" type="text/javascript"></script>
    </body>
</html>
