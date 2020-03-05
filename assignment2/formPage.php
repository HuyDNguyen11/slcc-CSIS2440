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
        <script type="text/javascript">
            function removeRequire(){
                document.getElementById("firstName").required = false;
                document.getElementById("lastName").required = false;
                document.getElementById("email").required = false;
                document.getElementById("birthday").required = false;
                document.getElementById("password").required = false;

            }
            function showElement(){
                document.getElementById("birthdayblock").style.display = "block";
                document.getElementById("firstnameblock").style.display = "block";
                document.getElementById("lastnameblock").style.display = "block";
                document.getElementById("emailblock").style.display = "block";
                document.getElementById("passwordblock").style.display = "block";
            }
            function addSet(){
                document.getElementById("firstName").required = true;
                document.getElementById("lastName").required = true;
                document.getElementById("email").required = true;
                document.getElementById("birthday").required = true;
                document.getElementById("password").required = true;
            }

            function updateSet(){
                document.getElementById("email").required = true;
                document.getElementById("password").required = true;
                var x = document.getElementById("firstnameblock");
                x.style.display = "none";
                x = document.getElementById("lastnameblock");
                x.style.display = "none";
                x = document.getElementById("birthdayblock");
                x.style.display = "none";

            }
            function searchSet(){
                var x = document.getElementById("birthdayblock");
                x.style.display = "none";
                x = document.getElementById("passwordblock");
                x.style.display = "none";
                /*if (x.style.display === "none") {
                    x.style.display = "block";
                } else {
                    x.style.display = "none";

                }*/
            }
            function setOption(){
                showElement();
                removeRequire();
                var x = document.getElementById("Action");
                var opt = x.options[x.selectedIndex].value;
                switch (opt) {
                    case "Search":
                        searchSet();
                        break;
                    case "Update":
                        updateSet();
                        break;
                    case "Insert":
                        addSet();
                        break;
                    default:
                        break;

                }
            }
        </script>
        <?php include "Header.php"; ?>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row top-buffer">

            </div>
            <div class="row">
                <div class="col-sm-8">
                <form class="form-horizontal" action="resultPage.php" method="post">
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
                            }else{
                                print<<<HTML
                                <fieldset>
                                    <legend>Info page!</legend>

                                    <!-- Select Basic -->
                                    <div class="form-group">
                                      <label class="col-md-8 control-label" for="Action">Select One</label>
                                      <div class="col-md-8">
                                        <select id="Action" name="Action" class="form-control" onchange="setOption()">
                                            <option value="none" selected disabled hidden>Select an Option </option>
                                            <option value="Search">Search</option>
                                            <option value="Insert">Add</option>
                                            <option value="Update">Update</option>
                                        </select>
                                      </div>
                                    </div>

                                    <div class="form-group" id="firstnameblock">
                                         <label for="firstname" class= "col-md-8 control-label">First Name</label>
                                         <input type="text" name="firstname" id="firstName" placeholder="enter first name" class="form-control input-md">

                                    </div>
                                    <div class="form-group" id="lastnameblock">
                                         <label for="lastname" class= "col-md-8 control-label">Last name</label>
                                         <input type="text" name="lastname" id="lastName" placeholder="enter last name" class="form-control input-md">
                                    </div>

                                    <div class="form-group" id="emailblock">
                                        <label for="email" class ="col-md-6 control-label">Email</label>
                                        <input type="text" name="Email" id="email" placeholder="name@domain.com" class = "form-control input-md">
                                    </div>

                                    <div class="form-group" id ="birthdayblock">
                                        <label for="birthday" class="col-md-8 control-label">Birthday</label>
                                        <input type="date" id="birthday" name="birthday" class = "form-control input-md">

                                    </div>
                                    <div class="form-group" id = "passwordblock">
                                        <label for="password" class="col-md-8 control-label">Password</label>
                                        <input type="password" id="password" name="password" placeholder="password" class = "form-control input-md">
                                    </div>


                                    <!-- Button -->
                                    <div class="form-group">
                                      <label class="col-md-8 control-label" for="Submit">Submit</label>
                                      <div class="col-md-8">
                                        <input id="submit" name="Submit" class="btn btn-primary" type="submit"></input>
                                      </div>
                                    </div>
                                    <input type="hidden" value=1 name="sneaky"></input>
                                </fieldset>
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
