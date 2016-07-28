//USER PROFILE EDIT PASSWORD JS - SAVEUS.COM

 function validateForm(){
		var oldpassword=document.forms["formEditPassword"]["OldPassword"].value;
		var newpassword=document.forms["formEditPassword"]["NewPassword"].value;
		var cnewpassword=document.forms["formEditPassword"]["CNewPassword"].value;
		
		if(oldpassword=="" || oldpassword==null || newpassword=="" || newpassword==null || cnewpassword==""||cnewpassword==null){
			alert("All Fields are Mandotory");
			return false;
		}
		
		if (newpassword.length <6){
			alert("New Password must atleast have 6 Characters");
			return false;
		}
		
		if(newpassword!=cnewpassword){
			alert("New Password & Confirmed Password does not Match");
			return false;
		}
}