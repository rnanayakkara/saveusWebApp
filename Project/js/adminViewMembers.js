// ADMIN VIEW MEMBERS JS - SAVEUS.COM

function validateForm(){
		var email=document.forms["formDeleteMember"]["Email"].value;
		var atpos=email.indexOf("@");
		var dotpos=email.lastIndexOf(".");
		if (email=="" || email==null){
			alert("Please enter the E-mail Address of the member that you want to Delete");
			return false;
		}
		if (atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length)
  		{
  			alert("Not A Valid E-mail Address");
  			return false;
  		}
		}
		function validateForm2(){
		var selectedDate=document.forms["MembersReport"]["dtmPicker"].value;	
		if (selectedDate=="" || selectedDate==null){
			alert("Please Set a Date");
			return false;
		}
}