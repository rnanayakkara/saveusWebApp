<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>::|SAVEUS - ADMINISTRATOR|::</title>
<link href="../css/admin.css" type="text/css" rel="stylesheet"/>
<link href="../css/buttons.css" type="text/css" rel="stylesheet"/>
</head>

<body>
<?php
error_reporting(0);

/*RETREIVING DATA FROM FORM*/

$type = $_POST['rdbType'];
$email = $_POST['txtEmail'];

if($type=="Add"){
	$cpassword=$_POST['txtPassword'];
	$firstName=$_POST['txtFName'];
	$lastName=$_POST['txtLName'];
	$phone=$_POST['txtPhone'];
	$userType="Admin";
	$regDate=date("Y/m/d");
	
	/*IMPORTING DATABASE CONNECTION FILE*/
	
	include("../php/dbconfig.php");
		
	$tbl_name="tblusers";
	$sql="INSERT INTO $tbl_name (EmailAddress,Type,Password,RegDate,SecurityQuestion,Answer,FirstName,LastName,PhoneNumber,CardType,CardNo)
VALUES ('$email','$userType','$cpassword','$regDate','Admin','Admin','$firstName', '$lastName','$phone','Admin','0000000000')";
	mysql_query($sql);
}
else{
	
	/*IMPORTING DATABASE CONNECTION FILE*/
	
	include("../php/dbconfig.php");
	
	$tbl_name="tblusers";
	$sql="DELETE FROM $tbl_name WHERE EmailAddress=('$email')";
	mysql_query($sql);
}

/*REDIRECTING TO MANAGE ADMIN PAGE*/
	
header( 'Location: ../php/manageAdmins.php' );
?>
</body>
</html>