<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>form validation</title>
    </head>
    <style media="screen">
        .error{
            border-color: rgb(235, 72, 36);
        }
    </style>
    <script type="text/javascript" src="js/validate.js">

    </script>
    <body>
        <form class="" action="#" name="myForm" method="post" onsubmit="return(validate());">
            <table cellspacing="2" cellpadding="2" border="1">
                <tr>
                    <td align="right">Name</td>

                    <td><input type="text" id="Name" value=""></td>
                </tr>
                <tr>
                    <td align="right">Email</td>
                    <td><input type="text" id="Email" value=""></td>
                </tr>
                <tr>
                    <td align="right">Zip</td>
                    <td><input type="text" id="Zip" value=""></td>
                </tr>
                <tr>
                    <td align="right">Country</td>
                    <td>
                        <select class="" id="Country">

                        </select>
                    </td>
                </tr>
                    <td align="right"></td>
                    <td><input type="submit" value="Submit" /></td>
                </tr>
            </table>
            <div id="errorlog">

            </div>
        </form>
    </body>
    <script type="text/javascript">
        countryList = ['USA', "Canada", "Vietnam", "VHAT"];
        countryDrp = "<option value = \"-1\" selected>[Select Country]</option> ";
        for (var i = 0; i < countryList.length; i++) {
            countryDrp += "<option value="+i+"selected>"+countryList[i]+"</option>"
        }
        document.myForm.Country.innerHTML = countryDrp;
    </script>
</html>
