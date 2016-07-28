<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>::|CHANGE CARD|::</title>

</head>

<body>
<?php
error_reporting(0);
session_start();

/*RETREIVING DATA FROM FROM*/

$email = $_SESSION['userEmail'];
$cardtype=$_POST['rdbCard'];
$cardno=$_POST['txtCardNo'];

/*IMPORTING DATABASE CONNECTION FILE*/
	
include("../php/dbconfig.php");
	
$tbl_name="tblusers";
$sql="UPDATE $tbl_name SET CardType=('$cardtype'), CardNo=('$cardno') WHERE EmailAddress=('$email')";
mysql_query($sql);

/*UPDATE SESSION VARIABLES*/

$_SESSION['userCardType']=$cardtype;
$_SESSION['userCardNo']=$cardno;

/*REDIRECTING TO USER PROFILE*/

header ('Location: ../php/userProfile.php')

?>
</html>