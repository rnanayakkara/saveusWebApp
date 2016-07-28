// USER LOGIN FORM JS - SAVEUS.COM

function validateForm(){
	var email=document.forms["formUserLogin"]["Email"].value;
	var password=document.forms["formUserLogin"]["Password"].value;
	var atpos=email.indexOf("@");
	var dotpos=email.lastIndexOf(".");
		if (email==null || email=="" || password==null || password=="")
  		{
 			 alert("All Fields Are Mandotory");
			 return false;
  		}
		if(password.length<6){
			alert("Password Must Atleast Contain 6 Characters");
 			 return false;
		}
		if (atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length)
  		{
  			alert("Not A Valid E-mail Address");
  			return false;
  		}
	}

function showRecoverForm(){
			window.location.assign("../html/recoverPassword.html");
			return true;
	}
