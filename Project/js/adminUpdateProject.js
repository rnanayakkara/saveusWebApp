// ADMIN UPDATE PROJECT DETAILS - SAVEUS.COM

function validateForm1(){
		var pid=document.forms["formEditProject"]["PId"].value;
		var name=document.forms["formEditProject"]["Name"].value;
		var purpose=document.forms["formEditProject"]["Purpose"].value;
		var desc=document.forms["formEditProject"]["Desc"].value;
		var photo=document.forms["formEditProject"]["Photo"].value;
		if (pid==null || pid=="" || name==null || name=="" ||purpose==null || purpose=="" || desc==null || desc=="" || photo==null || photo=="")
  		{
 			 alert("All Fields Are Mandotory");
			 return false;
  		}
		if(isNaN(pid)){
				alert("Project ID must be a Number");
  			return false;
		}
		
		if(document.forms["EditProject"]["Desc"].value.length >500){
				alert("Description should contains less than 500 Characters");
  			return false;
		}
		if(document.forms["EditProject"]["Purpose"].value.length >50){
				alert("Purpose should contains less than 50 Characters");
  			return false;
		}
		if(document.forms["EditProject"]["Name"].value.length >30){
				alert("Project Name should contains less than 30 Characters");
  			return false;
		}
}
function validateForm2(){
		var pid=document.forms["formDeleteProject"]["PId"].value;
		if(isNaN(pid) || pid=="" || pid==null){
				alert("Project ID must be a Number");
  			return false;
		}
}