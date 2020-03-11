function validate(){
    var errorArray =new Array();
    if (document.myForm.Name.value == "") {
        //alert("Please provide your name!");
        document.myForm.Name.focus();
        document.getElementById("Name").classList.add("error");
        errorArray.push("you need your name!")
        //return false;
    }
    if (document.myForm.Email.value == "") {
        //alert("Please provide your name!");
        document.myForm.Name.focus();
        document.getElementById("Email").classList.add("error");

        errorArray.push("you need your email");
        //return false;
    }
    if( document.myForm.Zip.value == "" || isNaN( document.myForm.Zip.value ) || document.myForm.Zip.value.length != 5 ){
        //alert( "Please provide a zip in the format #####." );
        document.myForm.Zip.focus() ;
        document.getElementById("Zip").classList.add("error");

        errorArray.push("you need your zip in format #####");
        //return false;
    }
    if( document.myForm.Country.value == "-1" ){
        //alert( "Please provide your country!" );
        document.myForm.Country.focus();
        document.getElementById("Country").classList.add("error");

        errorArray.push("you need your country");
        //return false;
    }

    if (errorArray.length > 0) {
        var errorReport = document.getElementById("errorlog");
        errorString = "<ul>";
        for (var i = 0; i < errorArray.length; i++) {
            errorString += "<li>" + errorArray[i]+ "</li>"
        }
        errorString += "</ul>";
        errorReport.innerHTML = errorString;
        return false;

    }
    return true;
}
