// ADMIN VIEW MESSAGES JS - SAVEUS.COM

function validateForm(){
		var selectedDate=document.forms["Messages"]["dtmPicker"].value;	
		if (selectedDate=="" || selectedDate==null){
			alert("Please Set a Date");
			return false;
		}
}