// MANAGE ADMINS FORMS JS - SAVEUS.COM

function validateForm(){
		var fname=document.forms["formAdmin"]["FName"].value;
		var lname=document.forms["formAdmin"]["LName"].value;
		var phone=document.forms["formAdmin"]["Phone"].value;
		var email=document.forms["formAdmin"]["Email"].value;
		var password=document.forms["formAdmin"]["Password"].value;
		var cpassword=document.forms["formAdmin"]["CPassword"].value;
		var atpos=email.indexOf("@");
		var dotpos=email.lastIndexOf(".");
		if (fname==null || fname=="" || lname==null || lname=="" ||phone==null || phone=="" || email==null || email=="" || password==null || password=="" || cpassword==null || cpassword=="")
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
					 
		
		if(isNaN(phone)){
				alert("Phone Number can only have Numbers");
  			return false;
		}
		if(phone.length != 10){
				alert("Phone Number should have only have 10 digits");
  			return false;
		}
}
 
 function checkBtnAdd(){
	 if(document.getElementById('rdbType0').checked = true){
		document.getElementById('Email').disabled=false
		document.getElementById('Password').disabled=false
		document.getElementById('CPassword').disabled=false
		document.getElementById('FName').disabled=false
		document.getElementById('LName').disabled=false
		document.getElementById('Phone').disabled=false
		document.getElementById('Add').disabled=false
		document.getElementById('Remove').disabled=true
	 }
}
function checkBtnRemove(){
	if(document.getElementById('rdbType1').checked = true){
		document.getElementById('Email').disabled=false
		document.getElementById('Password').disabled=true
		document.getElementById('CPassword').disabled=true
		document.getElementById('FName').disabled=true
		document.getElementById('LName').disabled=true
		document.getElementById('Phone').disabled=true
		document.getElementById('Remove').disabled=false
		document.getElementById('Add').disabled=true
	 }
}
 
function resetFields(){
		document.getElementById('rdbType0').checked=false
		document.getElementById('rdbType1').checked=false
	 	document.getElementById('Email').disabled=true
		document.getElementById('Phone').disabled=true
		document.getElementById('Password').disabled=true
		document.getElementById('CPassword').disabled=true
		document.getElementById('FName').disabled=true
		document.getElementById('LName').disabled=true
		document.getElementById('Remove').disabled=true
		document.getElementById('Add').disabled=true
		return true;
}
 
function setNullValues(){
	document.getElementById('FName').value ="null"
	document.getElementById('LName').value ="null"
	document.getElementById('Phone').value ="0000000000"
	document.getElementById('Password').value ="nullpp"
	document.getElementById('CPassword').value ="nullpp"
 }