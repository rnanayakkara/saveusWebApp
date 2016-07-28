// USER RECOVER PASSWORD FORM JS - SAVEUS.COM

function validateForm(){
		var answer=document.forms["formRecoverPassword"]["Answer"].value;
		var email=document.forms["formRecoverPassword"]["Email"].value;
		var cardno=document.forms["formRecoverPassword"]["CardNo"].value;
		var atpos=email.indexOf("@");
		var dotpos=email.lastIndexOf(".");
		if (answer ==null || answer=="" || email==null || email=="" || cardno==null || cardno=="")
  		{
 			 alert("All Fields Are Mandotory");
			 return false;
  		}
		if (atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length)
  		{
  			alert("Not A Valid E-mail Address");
  			return false;
  		}
					 
		if(isNaN(cardno)){
				alert("Card Number can only have Numbers");
  			return false;
		}
}