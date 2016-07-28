// ADMIN UPDATE CHILD DETAILS FROM JS - SAVEUS.COM

 function validateForm1(){
		var cid=document.forms["formEditChild"]["CId"].value;
		var name=document.forms["formEditChild"]["Name"].value;
		var age=document.forms["formEditChild"]["Age"].value;
		var desc=document.forms["formEditChild"]["Desc"].value;
		var photo=document.forms["formEditChild"]["Photo"].value;
		if (cid==null || cid=="" || name==null || name=="" ||age==null || age=="" || desc==null || desc=="" || photo==null || photo=="")
  		{
 			 alert("All Fields Are Mandotory");
			 return false;
  		}
		if(isNaN(cid)){
				alert("Child ID must be a Number");
  			return false;
		}
		if(isNaN(age)){
				alert("Child Age must be a Number");
  			return false;
		}
		if(age >15){
				alert("Invalid Age");
  			return false;
		}
		if(document.forms["EditChild"]["txtDesc"].value.length >300){
				alert("Description should contains less than 300 Characters");
  			return false;
		}
			
}
function validateForm2(){
		var cid=document.forms["formDeleteChild"]["DCId"].value;
		if(isNaN(cid) || cid=="" || cid==null){
				alert("Child ID must be a Number");
  			return false;
		}
}