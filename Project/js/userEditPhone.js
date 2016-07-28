// EDIT USER PHONE DETAILS - SAVEUS.COM

function validateForm(){
		var phone=document.forms["formEditPhone"]["Phone"].value;
		
		if (phone=="" || phone ==null){
			alert ("Please Enter Your Phone Number");
			return false;
		}
		if (isNaN(phone)){
		 alert ("Phone Number can only have Numbers");
		 return false;
		}
		if (phone.length !=10){
		 alert ("Phone Number should have 10 Digits");
		 return false;
		}
}