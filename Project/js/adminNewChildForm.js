// ADMIN ADD NEW CHILD FORM JS - SAVEUS.COM

function validateForm(){
var name=document.forms["AddChild"]["txtName"].value;
var age=document.forms["AddChild"]["txtAge"].value;
var desc= document.forms["AddChild"]["txtDesc"].value;
var image= document.forms["AddChild"]["imgPhoto"].value;

if (name =="" || name==null || age=="" || age==null || desc=="" || desc=="" || image=="" || image==null ){
alert("All Fields Are Mandotory");
			 return false;
}

if(isNaN(age)){
alert("Invalid Age");
			 return false;
}
if(age >15){
				alert("Invalid Age");
  			return false;
		}
if(document.forms["AddChild"]["txtDesc"].value.length >300){
				alert("Description should contains less than 300 Characters");
  			return false;
		}
var photo = document.getElementById('Photo');
var Photo = photo.value;
var ext = Photo.substring(Photo.lastIndexOf('.') + 1);
	if(ext == "JPEG" || ext == "jpeg" || ext == "jpg" || ext == "JPG"){
		return true;
	} 
	else{
		alert("Upload JPG images only");
		photo.focus();
		return false;
	}
}