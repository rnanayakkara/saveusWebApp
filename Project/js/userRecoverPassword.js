// RECOVER PASSWORD FORM JS - SAVEUS.COM

 function validateForm(){
		var password=document.forms["formNewPassword"]["Password"].value;
		var cpassword=document.forms["formNewPassword"]["CPassword"].value;
		
		if (password==null || password=="" || cpassword==null || cpassword==""){
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
}