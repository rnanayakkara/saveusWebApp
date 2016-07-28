<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/tmpMsgs.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>::|CHANGE PASSWORD|::</title>
<!--IMPORTING STYLESHEETS-->

<link href="../css/styles1.css" type="text/css" rel="stylesheet"/>
<link href="../css/buttons.css" type="text/css" rel="stylesheet"/>
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

/*RETREIVING DATA FROM FROM AND CHECK WHETHER THE OLD PASSWORD IS CORRECT AND CHANGE PASSWORD*/

$email = $_SESSION['userEmail'];
$password = $_SESSION['userPassword'];
$oldpassword = $_POST['txtOldPassword'];
$newpassword = $_POST['txtNewPassword'];

if($password==$oldpassword){
	
	/*IMPORTING DATABASE CONNECTION FILE*/
	
	include("../php/dbconfig.php");
	
	$tbl_name="tblusers";
	$sql="UPDATE $tbl_name SET Password=('$newpassword') WHERE EmailAddress=('$email')";
	mysql_query($sql);
	
	echo "
	<table class=tableFormRegister  align=center>
		<tr><td ><h3>Your Password was Successfully Changed</h3></td></tr>
	</table>
	<table class=tableFormRegister align=center>
		<tr>
		<td bgcolor=#FFF><h2 >
			<a href=../index.php>GO BACK TO HOME PAGE	|</a>
			<a href=../php/userProfile.php>GO BACK TO YOUR PROFILE</a></h2>
			</td>
		</tr>
	</table>";	
	
/*UPDATE SESSION PASSWORD*/
	
$_SESSION['userPassword']=$newpassword;
}
else{
echo "
<table class=tableFormRegister  align=center>
<tr><td ><h3>Password Change was Unsuccessful</h3></td></tr>
</table>
<table class=tableFormRegister align=center>
<tr>
	<td bgcolor=#FFF><h2 >
		<a href=../php/editPassword.php>RETRY	|</a>
		<a href=../index.php>GO BACK TO HOME PAGE</a></h2>
	</td>
</tr>
</table>";
}
?>
<!-- InstanceEndEditable -->

</body>
<!-- InstanceEnd --></html>
