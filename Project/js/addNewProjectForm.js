// ADMIN ADD NEW PROJECT FORM JS - SAVEUS.COM

function validateForm(){
		var name=document.forms["formAddProject"]["Name"].value;
		var purpose=document.forms["formAddProject"]["Purpose"].value;
		var desc=document.forms["formAddProject"]["Desc"].value;
		var photo=document.forms["formAddProject"]["Photo"].value;
		if (name==null || name=="" ||purpose==null || purpose=="" || desc==null || desc=="" || photo==null || photo=="")
  		{
 			 alert("All Fields Are Mandotory");
			 return false;
  		}
		if(document.forms["AddProject"]["Desc"].value.length >500){
				alert("Description should contains less than 500 Characters");
  			return false;
		}
		if(document.forms["AddProject"]["Purpose"].value.length >50){
				alert("Purpose should contains less than 50 Characters");
  			return false;
		}
		
		if(document.forms["AddProject"]["Name"].value.length >30){
				alert("Project Name should contains less than 30 Characters");
  			return false;
		}
}