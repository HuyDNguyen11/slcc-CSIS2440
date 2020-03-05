<?php
$hashed = hash('ripemd128', $password);
$sql = "insert into $db.Players values('$firstName', '$lastName', '$email', '$birthday', '$hashed');";
$result = $con->query($sql);
if ($result == FALSE) {
    $failmess = "Whole query " . $insert . "<br>";
    echo $failmess;
    print('Invalid query: ' . mysqli_error($con) . "<br>");
}eLSE{
    ECHO $firstName." is added to the record!";
}
 ?>
