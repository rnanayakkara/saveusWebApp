// CONTACT US TAB - USER COMMENS FORM JS - SAVEUS.COM

 function validateForm(){
		var message=document.forms["formContactUs"]["Message"].value;
		var name=document.forms["formContactUs"]["Name"].value;
		var phone=document.forms["formContactUs"]["Phone"].value;
		var email=document.forms["formContactUs"]["Email"].value;
		var atpos=email.indexOf("@");
		var dotpos=email.lastIndexOf(".");
		
		if (message==null || message=="" || name==null || name=="" ||phone==null || phone=="" || email==null || email=="")
  		{
 			 alert("All Fields Are Mandotory");
			 return false;
  		}
		if (atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length)
  		{
  			alert("Not A Valid E-mail Address");
  			return false;
  		}
		if(document.forms["formContactUs"]["Message"].value.length >300){
				alert("Message must contains less than 300 Characters");
  			return false;
		}
		if(isNaN(phone)){
				alert("Phone Number can only have Numbers");
  			return false;
		}
		if(phone.length != 10){
				alert("Phone Number should only have 10 digits");
  			return false;
		}
}  