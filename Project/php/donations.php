<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/tmpMsgs.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>::|SAVE US - DONATIONS|::</title>
<!-- IMPORT STYLESHETS -->

<link href="../css/styles1.css" type="text/css" rel="stylesheet"/>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
</head>

<body>
<!--HEADER DESIGN-->

<table align="center">
<tr><td><img src="../images/Logo.png" width="250px" height="90px"/></td></tr>
</table>
<!-- InstanceBeginEditable name="EditRegion3" -->
<?php
error_reporting(0);
session_start();

/*RETREIVING DATA FROM FORM*/

$userName=$_SESSION['userEmail'];
$type=$_POST['cmbDonationType'];
$amount=$_POST['cmbDonationAmount'];
$donationDate=date("Y/m/d");

/*IMPORTING DATABASE CONNECTION FILE*/
	
include("../php/dbconfig.php");
	
$tbl_name="tblDonations";
$sql="INSERT INTO $tbl_name (Date,UserName,Amount,Type) VALUES ('$donationDate','$userName','$amount','$type')";
$result = mysql_query($sql);

if ($result==0){
	echo "
	<table class=tableFormRegister  align=center>
		<tr><td ><h3> Sorry ".$_SESSION['userFname']."<br>Your Transaction was Unsuccessful</h3></td></tr>
	</table>
	<table class=tableFormRegister align=center>
		<tr><td bgcolor=#FFF><h2 ><a href=../php/donate.php>RETRY	|</a><a href=../index.php>	GO BACK TO HOME PAGE</a></h2></td></tr>
	</table>";
}
else{
	echo "
	<table class=tableFormRegister  align=center>
		<tr><td ><h3> Thank You ".$_SESSION['userFName']."<br>Your Donation Amount $".$amount." was Successfully added to SAVE US FUND</h3></td></tr>
	</table>
	<table class=tableFormRegister align=center>
		<tr><td bgcolor=#FFF><h2 ><a href=../index.php>GO BACK TO HOME PAGE</a></h2></td></tr>
	</table>";	
}
?>
<!-- InstanceEndEditable -->

</body>
<!-- InstanceEnd --></html>
