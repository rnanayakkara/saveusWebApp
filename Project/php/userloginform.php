<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/tmpMain.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>::|USER LOGIN|::</title>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<!--IMPORTING STYLESHEETS-->

<link href="../css/styles1.css" type="text/css" rel="stylesheet"/>
<link href="../css/buttons.css" type="text/css" rel="stylesheet"/>

<!--IMPORTING JAVESCRIPTS-->

<script src="../js/userLoginForm.js" type="text/javascript" language="javascript"></script>

<!-- InstanceEndEditable -->
<!-- InstanceParam name="OptionalRegion1" type="boolean" value="true" -->
<!-- InstanceParam name="OptionalRegion2" type="boolean" value="true" -->
</head>

<body>
<!-- InstanceBeginEditable name="EditRegion4" -->
<table class="tableHead" align="center">
	<tr>
    	<td><img src="../images/Logo.png" width="250px" height="90px"/></td>
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
<p>&nbsp;</p>
<table class="tableFormRegister" align="center">
	<tr>
    	<td><h2>LOGIN AS A MEMBER</h2></td>
	</tr>
</table>

<!--LOGIN FORM-->

<form id="userLogin" name="formUserLogin" method="post" action="userlogin.php" target="_self" onsubmit="return validateForm()">
<table class="formData" align="center">
    <tr><td colspan="2" class="steps"><p>&nbsp;</p>
      <p>Login Using Your E-mail And Password</p></td></tr>
    <tr><td width="200" class="formLabel">E-Mail</td><td width="442"><input type="text" id="Email" name="txtEmail" size="50"/></td></tr>
    <tr><td class="formLabel">Password</td><td><input type="password" id="Password" name="txtPassword" size="50"/></td></tr>
    <tr><td colspan="2"><hr/></td></tr>
    <tr><td colspan="2" align="center">
        <input type="submit" class="generalBtn" value="Login" />
        <input type="button" class="forgotPasswordBtn"  value="Forgot Password" onclick="showRecoverForm()"/>
    </td></tr>
    <tr>
    <td colspan="2" align="center"><p>Not a Memeber Yet ? <a href="userregistrationform.php">
                                    <input type="button" value="Register" class="generalBtn" />
    </a></p></td>
    </tr>
</table>
</form>

<!-- InstanceEndEditable -->

<!--FOOTER DESIGN-->
<!-- InstanceBeginEditable name="EditRegion5" -->

<!-- InstanceEndEditable -->
</body>
<!-- InstanceEnd --></html>
