<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>::|USER LOGIN|::</title>

<!--IMPORTING STYLESHEETS-->

<link href="../css/styles1.css" type="text/css" rel="stylesheet"/>

</head>
<body>
<table align="center">
<tr><td><img src="../images/Logo.png" width="250px" height="90px"/></td></tr>
</table>
<?php
error_reporting(0);

/*IMPORTING DATABASE CONNECTION FILE*/

include("dbconfig.php");

/*RECEIVING DATA FROM LOGIN FORM*/

$email=$_POST['txtEmail'];
$password=$_POST['txtPassword'];

/*RECEIVING DATA FROM DATABASE*/

$tbl_name="tblusers";
$sql="SELECT * FROM $tbl_name WHERE EmailAddress=('$email')";
$result=mysql_query($sql);

/*FETCHING DATA FROM THE RESULT*/

while($row = mysql_fetch_array($result))
{
	$type = $row['Type'];
	$dbPassword = $row['Password'];
	$firstName = $row['FirstName'];
	$lastName = $row['LastName'];
	$country = $row['Country'];
	$phone = $row['PhoneNumber'];
	$cardType = $row['CardType'];
	$cardNo = $row['CardNo'];
	$securityQuestion = $row['SecurityQuestion'];
	$answer = $row['Answer'];
	$regDate = $row ['RegDate'];
}

/*ADDING DATA TO SESSION VARIABLES*/

if ($dbPassword==$password){
	session_start();
	$_SESSION['userFName']=$firstName;
	$_SESSION['userEmail']=$email;
	$_SESSION['userPassword']=$dbPassword;
	$_SESSION['userLName']=$lastName;
	$_SESSION['userCountry']=$country;
	$_SESSION['userPhone']=$phone;
	$_SESSION['userCardType']=$cardType;
	$_SESSION['userCardNo']=$cardNo;
	$_SESSION['userSecurityQuestion']=$securityQuestion;
	$_SESSION['userAnswer']=$answer;
	$_SESSION['userRegDate']=$regDate;
	$_SESSION['userType']=$type;
	
	/*REDIRECTING ACCORDING TO THE USER TYPE*/
	
	if($type == "Admin"){
	header( 'Location: ../php/admin.php' );
	}
	else if($type == "User"){
	header( 'Location: ../index.php' );
	}
}
/*IF THE RESULT IS EMPTY, SHOWING THE ERROR MESSAGE*/

else{
echo "<table class=tableFormRegister  align=center>
<tr><td ><h3>Sorry, You have Entered an Invalid E-mail or Password</h3></td></tr>
</table>
<table class=tableFormRegister align=center>
<tr><td bgcolor=#FFF><h2 ><a href=../php/userloginform.php><p>RETRY</a>|<a href=../index.php>GO BACK TO HOME PAGE</a></p></h2></td></tr>
</table>";	
}
?>
</body>
</html>