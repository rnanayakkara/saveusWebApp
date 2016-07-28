// DONATIONS REPORT DATE PICKER JS - SAVEUS.COM

function validateForm(){
		var selectedDate=document.forms["DonationsReport"]["dtmPicker"].value;	
		if (selectedDate=="" || selectedDate==null){
			alert("Please Set a Date");
			return false;
		}
}