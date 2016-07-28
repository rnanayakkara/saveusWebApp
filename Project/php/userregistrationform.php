<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/tmpMain.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>::|USER REGISTRATION|::</title>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<!--IMPORTING STYLESHEETS-->

<link href="../css/styles1.css" type="text/css" rel="stylesheet"/>
<link href="../css/buttons.css" type="text/css" rel="stylesheet"/>

<!--IMPORTING JAVASCRIPTS-->

<script src="../js/userRegistrationForm.js" type="text/javascript" language="javascript"></script>
<!-- InstanceEndEditable -->
<!-- InstanceParam name="OptionalRegion1" type="boolean" value="true" -->
<!-- InstanceParam name="OptionalRegion2" type="boolean" value="true" -->
</head>

<body>
<!-- InstanceBeginEditable name="EditRegion4" -->
<table class=tableHead align=center>
	<tr>
		<td><img src=../images/Logo.png width=250px height=90px/></td>
	</tr>
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

/*CAPTCHA CODE GENERATING AND VALIDATION*/

if(isset($_POST['Submit'])){
     $key=substr($_SESSION['key'],0,5);
     $number = $_POST['number'];
     if($number!=$key){
          echo '<center><font face="sans-serif" color="#FF0000">
		   Validation string not valid! Please try again!</font></center>';
		   }
	else{		  
	$email = $_POST['txtEmail'];
		
	/*IMPORTING DATABASE CONNECTION FILE*/
	
	include("../php/dbconfig.php");
    
	/*CHECK WHETHER THE E-MAIL IS ALREADY REGISTERED, IF VALIDATIONS AND CAPTCHA CODE IS OK*/

	$tbl_name="tblusers";
	$sql="SELECT EmailAddress FROM $tbl_name WHERE EmailAddress=('$email')";
	$resultemail=mysql_query($sql);
			if (mysql_num_rows($resultemail)){
				echo "<center><font face=sans-serif color=#FF0000>Sorry, E-mail is already Registered! Please try again!</font></center>";
			}
	
	
	/*IF E-MAIL IS OK, REGISTER THE USER*/

			else{
				$cpassword=$_POST['txtCPassword'];
				$secQues=$_POST['cmbQuestion'];
				$answer=$_POST['txtAnswer'];
				$firstName=$_POST['txtFName'];
				$lastName=$_POST['txtLName'];
				$country=$_POST['cmbCountry'];
				$phone=$_POST['txtPhone'];
				$cardType=$_POST['rdbCard'];
				$cardNo=$_POST['txtCardNo'];
				$regDate=date("Y/m/d");
				
				/*IMPORTING DATABASE CONNECTION FILE*/
	
				include("../php/dbconfig.php");
	
				$tbl_name="tblusers";
				$sql="INSERT INTO $tbl_name (EmailAddress, Password, RegDate, SecurityQuestion, Answer, FirstName, LastName, Country, PhoneNumber, CardType, CardNo) VALUES ('$email','$cpassword','$regDate','$secQues', '$answer', '$firstName', '$lastName', '$country', '$phone', '$cardType', '$cardNo')";																																													 				mysql_query($sql);
			/*AFTER USER IS REGISTERED, REDIRECTING TO LOGIN PAGE*/
				
			header( 'Location: ../php/userloginform.php'); 
			exit;
			}
	}
}
echo "
<p>&nbsp;</p>
<table class=tableFormRegister align=center>
	<tr>
		<td><h2>PLEASE SUBMIT THE FORM TO BECOME A MEMBER</h2></td>
	</tr>
</table>";
?>

<!--REGISTRATION FORM-->

<form id="UserRegistration" name="formUserRegistration" enctype="multipart/form-data" method="post" action="userregistrationform.php"  onsubmit="return validateForm()">
<table class="formData" align="center">
    <tr><td colspan="2" class="steps">All The Fields Are Mandotary</td></tr>
    <tr><td class="formLabel">E-Mail</td><td><input type="text" id="Email" name="txtEmail" size="50" onchange="verifyEmail()"/></td></tr>
    <tr><td class="formLabel">Security Question</td><td><select  id="Question" name="cmbQuestion" disabled="true">
                                                                <option value="Your 1st Pets Name">Your 1st Pets' Name?</option>
                                                                <option value="City You were Born">City You were Born?</option>                        				
                                                        </select> </td></tr>
    <tr><td class="formLabel">Answer</td><td><input type="text" id="Answer" name="txtAnswer" size="50" disabled="true"/></td></tr>
    <tr><td colspan="2" class="steps">(Password must contain atleast 6 characters)</td></tr>
    <tr><td class="formLabel">Password</td><td><input type="password" id="Password" name="txtPassword" size="50" disabled="true"/></td></tr>
    <tr><td class="formLabel">Confirm Password</td><td><input type="password" id="CPassword" name="txtCPassword" size="50" disabled="true"/></td></tr>
    <tr><td colspan="2"><hr/></td></tr>
    <tr><td width="200" class="formLabel">First Name</td><td><input type="text" id="FName" name="txtFName" size="50" disabled="true"/></td></tr>
    <tr><td class="formLabel">Last Name</td><td><input type="text" id="LName" name="txtLName" size="50" disabled="true"/></td></tr>
    <tr><td class="formLabel">Country</td><td><select  id="Country" name="cmbCountry" disabled="true">
                                                                <option value="Bangladesh" >Bangladesh</option>
                                                                <option value="India" >India</option>
                                                                <option value="Pakistan" >Pakistan</option>
                                                                <option value="Sri Lanka" selected="selected">Sri Lanka</option>							
                                                </select> </td></tr>
    <tr><td class="formLabel">Phone Number</td><td><input type="text" id="Phone" name="txtPhone" size="50" disabled="true"/></td></tr>
    <tr><td class="formLabel">Card Type</td>
    <td><input type="radio" id="CardType1" name="rdbCard" value="Master Card" checked="checked" disabled="true" />
        <img src="../images/masterlogo.jpg" width="65" height="42" align="absmiddle">
        <input type="radio" id="CardType2" name="rdbCard" value="Visa Card" disabled="true"/>
        <img src="../images/VisaLogo.jpeg" width="65" height="42" align="absmiddle">
        <input type="radio" id="CardType3" name="rdbCard" value="Amex Card" disabled="true"/>
        <img src="../images/amexlogo.jpg" width="65" height="42" align="absmiddle">
    </td></tr>
        <tr><td class="formLabel">Card Number</label></td><td><input type="text" id="CardNo" name="txtCardNo" size="50" disabled="true"/></td></tr>
        <tr><td class="formLabel">Captcha Code</label></td><td><img src="php_captcha.php"></td></tr>
        <tr><td class="formLabel">Enter Captcha Code</label></td><td><input name="number" type="text" id=\&quot;number\&quot; onchange="checkCode()"></td>													
    </tr>
    <tr>
        <td class="formLabel"><input type="checkbox" id="Agree" name="chkAgree" value="Agree"onclick="enableRegister()"></td>
        <td ><lable><a target="_blank" href="../html/agreement.html">I Agree the Term & Conditions of SAVEUS.COM</a></label></td>
    </tr>
    <tr><td colspan="2"><hr/></td></tr>
    <tr><td colspan="2" align="center">
    	<input type="submit" class="generalBtn" name="Submit" id="Register" value="Register" disabled="true"/>
    	<input type="reset" class="generalBtn" id="Reset" value="Reset" onclick="return resetFields()"/>
    </td></tr> 
    <tr><td colspan="2">&nbsp;</td></tr>
</table>
</form>

<!-- InstanceEndEditable -->

<!--FOOTER DESIGN-->
<!-- InstanceBeginEditable name="EditRegion5" -->

<!-- InstanceEndEditable -->
</body>
<!-- InstanceEnd --></html>
