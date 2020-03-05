<?php
session_start();
include "DataBaseConnection.php";
$firstName = $_POST['firstname'];
$lastName = $_POST['lastname'];
$email = $_POST['Email'];
$birthday = $_POST['birthday'];
$password = $_POST['password'];
$sneaky = $_POST['sneaky'];
$action = $_POST['Action'];
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
        <style >
            .top-buffer{
                margin:20px;
            }
        </style>
        
        <?php include "Header.php"; ?>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row top-buffer">

            </div>
            <div class="row">
                <div class="col-sm-8">
                <form class="form-horizontal" action="formPage.php" method="post">
                    <div class="form-group">
                        <?php
                            if (isset($_POST['submit']) || $sneaky == 1) {
                                echo "<fieldset>";
                                switch ($action) {
                                    case "Insert":
                                        include "insertPage.php";
                                        break;
                                    case "Update":
                                        include "updatePage.php";
                                        break;
                                    case "Search":
                                        print<<<HTML
                                        HTML;
                                        include "searchPage.php";
                                        break;
                                    default:
                                        echo "Something is wrong!";
                                        break;
                                }
                                print<<<HTML
                                <!-- Button -->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="UnSubmit">Submit</label>
                                        <div class="col-md-4">
                                            <input id="submit" name="UnSubmit" class="btn btn-primary" type="submit"></input>
                                        </div>
                                    </div>
                                    <input type='hidden' value=0 name='sneaky'></input></fieldset>
                                HTML;
                            }
                        ?>
                    </div>
                </div>
                </form>
            </div>
        </div>

    </body>
</html>
