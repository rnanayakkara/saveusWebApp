<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/tmpMain.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>::|RECOVER PASSWORD|::</title>

<!-- IMPORT STYLESHEETS -->

<link href="../css/styles1.css" type="text/css" rel="stylesheet"/>
<link href="../css/buttons.css" type="text/css" rel="stylesheet"/>

<!-- IMPORT JAVASCRIPT -->

<script src="../js/userRecoverPassword.js" language="javascript" type="text/javascript" ></script>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<!--IMPORTING STYLESHEETS-->

<link href="../css/styles1.css" type="text/css" rel="stylesheet"/>
<link href="../css/buttons.css" type="text/css" rel="stylesheet"/>
<!-- InstanceEndEditable -->
<!-- InstanceParam name="OptionalRegion1" type="boolean" value="true" -->
<!-- InstanceParam name="OptionalRegion2" type="boolean" value="true" -->
</head>

<body>
<!-- InstanceBeginEditable name="EditRegion4" -->
<table class="tableHead" align="center">
	<tr><td><img src="../images/Logo.png" width="250px" height="90px"/></td></tr>
</table>
<!-- InstanceEndEditable -->
<!--HEADER DESIGN-->
<table class="tableNavigate" align="center">
<tr>
  <td class="NavigateData"><a href="../index.php" target="_self">HOME</a></td>
  <td class="NavigateData"><a href="meetchildren.php" target="_self">MEET CHILDREN</a></td>
  <td class="NavigateData"><a href="helpprojects.php" target="_self">HELP PROJECTS</a></td>
  <td class="NavigateData"><a href="contactus.php" target="_self">CONTACT US</a></td>
  <td ><a href="donate.php" target="_self"><input type="button" value="Donate" class="donateLinkBtn" /></a></td>
</tr>
</table>

<!-- InstanceBeginEditable name="EditRegion3" -->
<?php
session_start();
error_reporting(0);

/*RETREIVING DATA FROM FORM*/

$email= $_POST['txtEmail'];
$secQues=$_POST['cmbQuestion'];
$answer=$_POST['txtAnswer'];
$cardType=$_POST['rdbCard'];
$cardNo=$_POST['txtCardNo'];

/*IMPORTING DATABASE CONNECTION FILE*/
	
include("../php/dbconfig.php");
	
$tbl_name="tblusers";
$sql="SELECT * FROM $tbl_name WHERE EmailAddress=('$email')";
$result = mysql_query($sql);

$_SESSION['recoverEmail'] = $email;

/*RETREIVING DATA FROM DATABASE*/

while ($row=mysql_fetch_array($result)){
	$dbsecQues=$row['SecurityQuestion'];
	$dbanswer=$row['Answer'];
	$dbcardType=$row['CardType'];
	$dbcardNo=$row['CardNo'];
}

/*CHECKING ENTERED DATA AND DATABASE DATA*/

if($secQues == $dbsecQues && $answer==$dbanswer && $cardType==$dbcardType && $cardNo==$dbcardNo){
	
echo "
<p>&nbsp;</p>
<table class=tableFormRegister align=center>
	<tr><td><h2>DETAILS ARE CORRECT</h2></td></tr>
</table>";

/*IF DETAILS ARE CORRECT SHOW RECOVER FORM*/

echo "
<form id=NewPassword name=formNewPassword method=post action=../php/newPassword.php  onsubmit='return validateForm()'>
<table class=formData align=center>	
	<tr><td colspan=2 class=steps><p>&nbsp;</p>
		<p>Please Enter Your New Password</p></td></tr>
		<tr><td colspan=2 class=steps>(Password must contain atleast 6 characters)</td></tr>
	<tr><td class=formLabel>Password</td><td><input type=password id=Password name=txtPassword size=50 /></td></tr>
	<tr><td class=formLabel>Confirm Password</td><td><input type=password id=CPassword name=txtCPassword size=50 /></td></tr>
	<tr><td colspan=2><hr/></td></tr>
	<tr>
		<td colspan=2 align=center>
			<input type=submit class=generalBtn name=btnSubmit id=Submit value='Submit'/>
			<input type=reset class=generalBtn id=Reset value='Reset'/>
		</td>
	</tr> 
	<tr><td colspan=2>&nbsp;</td></tr>
</table>
</form>";
}
else{
echo "
<p>&nbsp;</p>
<table class=tableFormRegister align=center>
	<tr><td><h2>DETAILS ARE INCORRECT</h2></td></tr>
</table>
<table class=formData align=center>	
	<tr><td colspan=2 class=steps><p>&nbsp;</p>
    <p>Please Try Again</p></td>
	</tr>
</table>";
}
?>
<!-- InstanceEndEditable -->

<!--FOOTER DESIGN-->
<!-- InstanceBeginEditable name="EditRegion5" -->

<!-- InstanceEndEditable -->
</body>
<!-- InstanceEnd --></html>
