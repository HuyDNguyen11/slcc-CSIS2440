<?php
session_start();
unset($_SESSION['badPass']);

$myusername = $_POST['myusername'];
$mypassword = $_POST['mypassword'];

require_once "DataBaseConnection.php";


$myusername = mysql_fix_string($con, $myusername);
$mypassword = mysql_fix_string($con, $mypassword);

$hashed = hash("ripemd128", $mypassword);

$sql = "Select * from heroku_521233846929941.Captains where Email = '$myusername' AND thePass = '$hashed'";
$result = $con->query($sql);

if(!$result){
    $message = "Whole query " . $sql;
    echo $message;
    die('Invalide query' . $sql);
}

$count = $result->num_rows;

if($count == 1){
    $row = $result->fetch_assoc();
    $_SESSION['user'] = $myusername;
    $_SESSION['password'] = $mypassword;
    $_SESSION['Captain'] = $row['CaptainName'];
    $_SESSION['Command'] = $row['Command'];
    $_SESSION['Combat'] = $row['Combat'];
    $_SESSION['Commerce'] = $row['Commerce'];
    $_SESSION['Cunning'] = $row['Cunning'];

    //register $myusername $mypassword and redirect to file "login_success.php"
    header("Location:Dashboard.php");

    //echo "<a hred = 'Catalogue.php'> To Shopping</a>";
}else{
    header("Location:LoginPage.php");
    $_SESSION['badPass']++;
    //echo "Wrong Username or Passwrod";
}
