<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>::|CHANGE PHONE|::</title>
</head>
<body>
<?php
error_reporting(0);
session_start();

$email = $_SESSION['userEmail'];

/*RETREIVING SELECTED DATE AND CHANGE FORMAT*/

$country=$_POST['cmbCountry'];
$phone=$_POST['txtPhone'];

/*IMPORTING DATABASE CONNECTION FILE*/
	
include("../php/dbconfig.php");
	
$tbl_name="tblusers";
$sql="UPDATE $tbl_name SET PhoneNumber=('$phone'), Country=('$country') WHERE EmailAddress=('$email')";
$result = mysql_query($sql);

/*UPDATE SEESION VARIABLES*/

$_SESSION['userPhone']=$phone;
$_SESSION['userCountry']=$country;

/*REDIRECTING TO USER PROFILE*/

header ('Location: ../php/userProfile.php')

?>
</body>
</html>