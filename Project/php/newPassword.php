<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>::RECOVER PASSWORD::</title>
<!-- IMPORT STYLESHEETS -->

<link href="../css/styles1.css" type="text/css" rel="stylesheet"/>
<link href="../css/buttons.css" type="text/css" rel="stylesheet"/>
</head>
<body>
<?php
error_reporting(0);
session_start();

/*RETREIVING DATA FROM FORM*/

$password=$_POST['txtPassword'];
$cPassword=$_POST['txtCPassword'];
$email = $_SESSION['recoverEmail'];

/*IMPORTING DATABASE CONNECTION FILE*/
	
include("../php/dbconfig.php");
	
$tbl_name="tblusers";
$sql="UPDATE $tbl_name SET Password = ('$cPassword') WHERE EmailAddress=('$email')";
$result = mysql_query($sql);

if($result !=0){
	header( 'Location: ../index.php' ) ;
}
else{
echo "
<table class=tableFormRegister  align=center>
	<tr><td ><h3>Sorry, Recover Password was Fail</h3></td></tr>
</table>
<table class=tableFormRegister align=center>
	<tr>
		<td bgcolor=#FFF><h2 ><a href=../php/recoverPassword.php><p>RETRY</a>|<a href=../index.php>GO BACK TO HOME PAGE</a></p></h2></td>
	</tr>
</table>";	
}

?>
</body>
</html>