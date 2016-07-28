// UPDATE NEWS DETAILS JS - SAVEUS.COM

 function validateForm(){
		var nid=document.forms["formEditNews"]["NId"].value;
		var heading=document.forms["formEditNews"]["Heading"].value;
		var details=document.forms["formEditNews"]["Details"].value;
		if (nid==null || nid=="" || heading==null || heading=="" ||details==null || details=="")
  		{
 			 alert("All Fields Are Mandotory");
			 return false;
  		}
		if(isNaN(nid)){
				alert("News ID must be a Number");
  			return false;
		}
				
		if(document.forms["formEditNews"]["Heading"].value.length >30){
			alert("Heading should contain less than 30 Characters");
  			return false;
		}
		
		if(document.forms["formEditNews"]["Details"].value.length >1000){
			alert("Details should contain less than 1000 Characters");
  			return false;
		}
		
		if(nid == 1 || nid == 2){
			return true;
		}
		else{
		alert("Invalid News ID");
  			return false;
		}
}