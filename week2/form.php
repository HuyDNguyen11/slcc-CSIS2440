
<?php
print_r($_POST);
$player = $_POST["player"];
$computer = rand(1,100);
print($computer);
function compare($x, $y){
    return $x - $y;
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <form action="form.php" method="post">
            <label for="player">input the player number :</label>
            <input type="text" name="player" value="0"> <br>

            <input type="submit" name="compare" value="Compare the score">
            <input type="hidden" value = "<?php echo $_POST['HiddenVal'].','.$player; ?>" name="HiddenVal">
        </form>
<?php 
echo compare($player,$computer);
?>
    </body>
</html>
