// USER PROFILE - EDIT CARD FORM - SAVEUS.COM

function validateForm(){
		var cardno=document.forms["formEditCard"]["CardNo"].value;
		
		if (cardno=="" || cardno ==null){
			alert ("Please Enter Your Card Number");
			return false;
		}
		if (isNaN(cardno)){
		 alert ("Card Number can only have Numbers");
		 return false;
		}
		if (cardno.length> 16){
		 alert ("Invalid Card Number");
		 return false;
		}
}