<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>::|CHANGE NAME|::</title>
</head>
<body>
<?php
error_reporting(0);
session_start();

/*RETREIVING DATA FROM FORM*/

$email = $_SESSION['userEmail'];
$fname=$_POST['txtFName'];
$lname=$_POST['txtLName'];

/*IMPORTING DATABASE CONNECTION FILE*/
	
include("../php/dbconfig.php");
	
$tbl_name="tblusers";
$sql="UPDATE tblusers SET FirstName=('$fname'), LastName=('$lname') WHERE EmailAddress=('$email')";
mysql_query($sql);

/*UPDATE SESSION VARIABLES*/

$_SESSION['userFName']=$fname;
$_SESSION['userLName']=$lname;

/*REDIRECTING TO USER PROFILE*/

header ('Location: ../php/userProfile.php')

?>
</body>
</html>