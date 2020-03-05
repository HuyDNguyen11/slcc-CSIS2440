<?php
$hashed = hash("ripemd128", $password);
$sql = "update $db.Players set `password` ='$hashed' where `Email` = '$email';";
echo $sql;
$result = $con->query($sql);
if($result == FALSE){
    $failmess = "Whole query " . $insert . "<br>";
    echo $failmess;
    print('Invalid query: ' . mysqli_error($con) . "<br>");
}else{
    echo "Players is updated";
}
?>
