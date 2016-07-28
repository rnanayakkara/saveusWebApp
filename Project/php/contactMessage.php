<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>::|CONTACT US|::</title>
<link href="../css/styles1.css" type="text/css" rel="stylesheet"/>
</head>

<body>
<?php
error_reporting(0);

/*RETREIVING DATA FROM FORM*/

$email = $_POST['txtEmail'];
$phone = $_POST['txtPhone'];
$message = $_POST['txtMessage'];
$name = $_POST['txtName'];
$msgDate=date("Y/m/d");

/*IMPORTING DATABASE CONNECTION FILE*/
	
include("../php/dbconfig.php");
	
$tbl_name="tblmessages";
$sql="INSERT INTO $tbl_name (MessageDate,Email,Name,Phone,Message) VALUES ('$msgDate','$email','$name','$phone','$message')";
mysql_query($sql);

/*REDIRECTING TO USER PROFILE*/

header( 'Location: ../php/contactus.php' ) ;
?>
</body>
</html>