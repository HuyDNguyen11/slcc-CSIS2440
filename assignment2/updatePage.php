<?php
$hashed = hash("ripemd128", $password);
$accExist  = "select Email from $db.Players where `Email` = '$email'";
$result = $con->query($accExist);
if($result == FALSE){
    $failmess = "Whole query " . $insert . "<br>";
    echo $failmess;
    print('Invalid query: ' . mysqli_error($con) . "<br>");
}else{
    $count = $result->num_rows;
    if($count == 1){
        $sql = "update $db.Players set `password` ='$hashed' where `Email` = '$email';";
        $result = $con->query($sql);
        if($result == FALSE){
            $failmess = "Whole query " . $insert . "<br>";
            echo $failmess;
            print('Invalid query: ' . mysqli_error($con) . "<br>");
        }else{
            echo "Players is updated";
        }
    }else{
        echo "$email does not exist in record!";
    }
}

?>
