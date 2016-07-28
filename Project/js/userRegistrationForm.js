// USERR REGISTRATION FORM VALIDATION JS - SAVEUS.COM

 function validateForm(){
		var answer=document.forms["formUserRegistration"]["Answer"].value;
		var fname=document.forms["formUserRegistration"]["FName"].value;
		var lname=document.forms["formUserRegistration"]["LName"].value;
		var phone=document.forms["formUserRegistration"]["Phone"].value;
		var email=document.forms["formUserRegistration"]["Email"].value;
		var password=document.forms["formUserRegistration"]["Password"].value;
		var cpassword=document.forms["formUserRegistration"]["CPassword"].value;
		var cardno=document.forms["formUserRegistration"]["CardNo"].value;
		var atpos=email.indexOf("@");
		var dotpos=email.lastIndexOf(".");
		if (answer==null || answer=="" || fname==null || fname=="" || lname==null || lname=="" ||phone==null || phone=="" || email==null || email=="" || password==null || password=="" || cpassword==null || cpassword=="" || cardno==null || cardno=="")
  		{
 			 alert("All Fields Are Mandotory");
			 return false;
  		}
		if(password.length<6){
			alert("Password Must Atleast Contain 6 Characters");
 			 return false;
		}
		if(cpassword!=password){
			alert("Password And Confirm Password Does Not Match");
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
		if(isNaN(phone)){
				alert("Phone Number can only have Numbers");
  			return false;
		}
		if(phone.length != 10){
				alert("Phone Number should have only have 10 digits");
  			return false;
		}
			
}

 function verifyEmail(){
	var email=document.forms["formUserRegistration"]["Email"].value;
	var atpos=email.indexOf("@");
	var dotpos=email.lastIndexOf(".");
		
	if (atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length)
  		{
  			alert("Not A Valid E-mail Address");
  			return false;
  		}
		else{
		document.getElementById('Question').disabled=false
		document.getElementById('Answer').disabled=false
		document.getElementById('FName').disabled=false
		document.getElementById('LName').disabled=false
		document.getElementById('Phone').disabled=false
		document.getElementById('Password').disabled=false
		document.getElementById('CPassword').disabled=false
		document.getElementById('Country').disabled=false
		document.getElementById('CardType1').disabled=false
		document.getElementById('CardType2').disabled=false
		document.getElementById('CardType3').disabled=false
		document.getElementById('CardNo').disabled=false
				  			return true;
		}
 }
 
 function resetFields(){
	 	document.getElementById('Question').disabled=true
		document.getElementById('Answer').disabled=true
 		document.getElementById('FName').disabled=true
		document.getElementById('LName').disabled=true
		document.getElementById('Phone').disabled=true
		document.getElementById('Password').disabled=true
		document.getElementById('CPassword').disabled=true
		document.getElementById('Country').disabled=true
		document.getElementById('CardType1').disabled=true
		document.getElementById('CardType2').disabled=true
		document.getElementById('CardType3').disabled=true
		document.getElementById('CardNo').disabled=true
		document.getElementById('Register').disabled=true
		return true;
 }
 
 function enableRegister(){
	 if (document.getElementById('Agree').checked=true){
	 	document.getElementById('Register').disabled=false;
	 }
	 else if(document.getElementById('Agree').checked=false){
		 document.getElementById('Register').disabled=true;
	 } 
		
 }