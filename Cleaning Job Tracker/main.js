function validateForm() {
    var a = document.forms["entry"]["phone"].value;
    var b = document.forms["entry"]["name"].value;
    var c = document.forms["entry"]["qty"].value;
    var d = document.forms["entry"]["tagnum"].value;

    if (a == "") {
        document.getElementById("phone").style.borderColor = "red";
        alert("All fields are required");
        return false;
    }
    else {
    	document.getElementById("phone").style.borderColor = "";
    }
    if (b == "") {
        document.getElementById("name").style.borderColor = "red";
        alert("All fields are required");
        return false;
    }else {
    	document.getElementById("name").style.borderColor = "";
    }
    
    if (c == "") {
        document.getElementById("qty").style.borderColor = "red";
        alert("All fields are required");
        return false;
    }else {
    	document.getElementById("qty").style.borderColor = "";
    }
    if (d == "") {
        document.getElementById("tag").style.borderColor = "red";
        alert("All fields are required");
        return false;
    }else {
    	document.getElementById("tag").style.borderColor = "";
    }  
}