<?php
    $host = 'us-cdbr-iron-east-04.cleardb.net';
    $user = 'bc5308ef732f00';
    $password = '9dbbb8d8';
    $dbname = 'heroku_521233846929941';
    $conn = new mysqli($host, $user, $password);
        #print_r($conn);
    if($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
    }
    echo "<b><h2>We Connected!</h2></b>";



    echo "<br>";
    function close($db){
        $db->close();
    }
?>
