<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/tmpAdmin.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<!--IMPORTING STYLESHEETS-->

<link href="../css/admin.css" type="text/css" rel="stylesheet"/>
<link href="../css/buttons.css" type="text/css" rel="stylesheet"/>

<!--IMPORTING JAVESCRIPTS-->

<script src="../js/adminNewChildForm.js" language="javascript" type="text/javascript" ></script>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
</head>

<body>
<?php
error_reporting(0);
session_start();

/*CHECK WHETHER THE USER IS ALREADY LOGGED IN AND SESSION VARIBLES ARE SET*/

if (!isset($_SESSION['userFName'])){

header( 'Location: ../php/userloginform.php' ) ;
}
?>
<table align="center">
<tr><td><img src="../images/Logo.png" width="250px" height="90px"/></td></tr>
</table>
<table class="tblLinksHome" align="center" >
<tr><td bgcolor="#FFFFFF"><a href="admin.php">GO TO ADMIN HOME	</a></td></tr>
</table>
<!-- InstanceBeginEditable name="EditRegion5" -->
<table class="tblHead" align="center">
  <tr>
    <td >SAVEUS.COM - ADMIN PANEL - ADD NEW CHILD</td>
  </tr>
</table>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="EditRegion4" -->
<p>&nbsp;</p>

<!--NEW CHILD FORM-->

<form id="AddChild" name="formAddChild" enctype="multipart/form-data" method="post" action="../php/addChild.php" target="_self" onsubmit="return validateForm()">
<table align="center" class="tblGeneral">
<tr><td width="340" align="right">Name</td><td width="608"><input type="text" id="Name" name="txtName" size="50"/></td></tr>
<tr><td align="right">Age</td><td><input type="text" id="Age" name="txtAge" size="50"/></td></tr>
<tr><td colspan="2" align="center">(Maximum 300 Characters)</td></tr>
<tr><td align="right">Description</td><td><textarea id="Desc" name="txtDesc" rows="5" cols="39"></textarea></td></tr>
<tr><td colspan="2" align="center">(Less than 1MB)</td></tr>
<tr><td align="right">Photo</td><td><input type="file" id="Photo" name="imgPhoto"  /></td></tr>
<tr><td colspan="2" align="center"><input type="submit" value="Add" class="adminBtn"/><input type="reset" class="adminBtn"/></td></tr>
</table>
</form>
<!-- InstanceEndEditable -->
</body>
<!-- InstanceEnd --></html>
