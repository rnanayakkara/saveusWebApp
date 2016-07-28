<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/tmpMain.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>::|USER PROFILE|::</title>
<!--IMPORTING STYLESHEETS-->

<link href="../css/styles1.css" type="text/css" rel="stylesheet"/>
<link href="../css/buttons.css" type="text/css" rel="stylesheet"/>

<!--IMPORTING JAVASCRIPTS-->

<script src="../js/userEditPhone.js" type="text/javascript" language="javascript"></script>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<!--IMPORTING STYLESHEETS-->
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
<table class="tableFormRegister" align="center">
<tr><td><h2>USER PROFILE - CHANGE PHONE NUMBER & COUNTRY</h2></td></tr>
</table>

<!--EDIT NAME FORM-->

<form id="EditPhone" name="formEditPhone" method="post" action="../php/phoneChanged.php"  onsubmit="return validateForm()">
    <table class="formData" align="center">
    <tr><td colspan="2">&nbsp;</td></tr>
    <tr><td class="formLabel">Country</td>
    	<td><select  id="Country" name="cmbCountry">
                <option value="Bangladesh" >Bangladesh</option>
                <option value="India" >India</option>
                <option value="Pakistan" >Pakistan</option>
                <option value="Sri Lanka" selected="selected">Sri Lanka</option>							
       		</select> 
      	</td>
    </tr>
    <tr><td width="323" class="formLabel">Phone Number</td><td width="325"><input type="text" id="Phone" name="txtPhone" size="30" /></td>
    <tr><td colspan="2"><hr /></td></tr>
    <tr><td colspan="2" align="center">
    	<input type="submit" class="generalBtn" name="Submit" value="Submit"/>
        <input type="reset" class="generalBtn" value="Reset"/></td></tr> 
    <tr><td colspan="2">&nbsp;</td></tr>
</table>
</form>
<table class="tableEnd" align="center">

<!-- InstanceEndEditable -->

<!--FOOTER DESIGN-->
<!-- InstanceBeginEditable name="EditRegion5" -->

<!-- InstanceEndEditable -->
</body>
<!-- InstanceEnd --></html>
