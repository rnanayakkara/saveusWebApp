//USER PROFILE EDIT NAME JS - SAVEUS.COM

function validateForm(){
		var fname=document.forms["formEditName"]["FName"].value;
		var lname=document.forms["formEditName"]["LName"].value;
				
		if(fname=="" || fname==null || lname=="" || lname==null ){
			alert("All Fields are Mandotory");
			return false;
		}
}