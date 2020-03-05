<?php
$hashed = hash('ripemd128', $password);
$sql = "insert into $db.Players values('$firstName', '$lastName', '$email', '$birthday', '$hashed');";
echo $sql;
$result = $con->query($sql);
if ($result == FALSE) {
    $failmess = "Whole query " . $insert . "<br>";
    echo $failmess;
    print('Invalid query: ' . mysqli_error($con) . "<br>");
}
 ?>
