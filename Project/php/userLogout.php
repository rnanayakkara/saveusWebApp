<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>::|USER LOGOUT|::</title>
<link href="../css/styles1.css" type="text/css" rel="stylesheet"/>
</head>

<body>
<?php 
error_reporting(0);
session_start();

/*UNSET ALL THE SESSION VARIABLES*/

	unset($_SESSION['userFName']);
	unset($_SESSION['userEmail']);
	unset($_SESSION['userPassword']);
	unset($_SESSION['userLName']);
	unset($_SESSION['userCountry']);
	unset($_SESSION['userPhone']);
	unset($_SESSION['userCardType']);
	unset($_SESSION['userCardNo']);
	unset($_SESSION['userSecurityQuestion']);
	unset($_SESSION['userAnswer']);
	unset($_SESSION['userRegDate']);
	unset($_SESSION['userType']);
	
/*DESTROY THE SESSION*/

session_destroy();

/*REDIRECTING TO HOME PAGE*/
header ('Location: ../index.php');
?>
</body>
</html>