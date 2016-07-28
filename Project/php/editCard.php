<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/tmpMain.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>::|USER PROFILE|::</title>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<!--IMPORTING STYLESHEETS-->

<link href="../css/styles1.css" type="text/css" rel="stylesheet"/>
<link href="../css/buttons.css" type="text/css" rel="stylesheet"/>

<!--IMPORTING JAVASCRIPT-->

<script src="../js/userEditCard.js" type="text/javascript" language="javascript"></script>
<!-- InstanceEndEditable -->
<!-- InstanceParam name="OptionalRegion1" type="boolean" value="true" -->
<!-- InstanceParam name="OptionalRegion2" type="boolean" value="true" -->
</head>

<body>
<!-- InstanceBeginEditable name="EditRegion4" -->
<p>&nbsp;</p>
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
	<tr><td><h2>USER PROFILE - EDIT CARD DETAILS</h2></td></tr>
</table>

<!--EDIT CARD FORM-->

<form id="EditCard" name="formEditCard" method="post" action="../php/cardChanged.php"  onsubmit="return validateForm()">
<table class="formData" align="center">
	<tr><td colspan="2">&nbsp;</td></tr>
	<tr><td width="223" class="formLabel">Card Type</td><td width="425">
        <input type="radio" id="CardType1" name="rdbCard" value="Master Card" checked="checked" />
        <img src="../images/masterlogo.jpg" width="65" height="42" align="absmiddle">
        <input type="radio" id="CardType2" name="rdbCard" value="Visa Card" />
        <img src="../images/VisaLogo.jpeg" width="65" height="42" align="absmiddle">
        <input type="radio" id="CardType3" name="rdbCard" value="Amex Card"/>
        <img src="../images/amexlogo.jpg" width="65" height="42" align="absmiddle"></td></tr>
	<tr><td class="formLabel">Card Number</label></td><td><input type="text" id="CardNo" name="txtCardNo" size="50"/></td></tr>
	<tr><td colspan="2"><hr /></td></tr>
	<tr><td colspan="2" align="center">
        <input type="submit" class="generalBtn" name="Submit" value="Submit"/>
        <input type="reset" class="generalBtn" value="Reset"/>
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
