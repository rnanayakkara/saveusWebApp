<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/tmpAdmin.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>::|SAVEUS - ADMINISTRATORS|::</title>
<!-- IMPORT STYLESHEET -->

<link href="../css/admin.css" type="text/css" rel="stylesheet"/>
<link href="../css/buttons.css" type="text/css" rel="stylesheet"/>

<!-- IMPORT JAVASCRIPT -->

<script src="../js/manageAdmins.js" type="text/javascript" language="javascript"></script>

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
    <tr><td class="reportHeading" align="right" >No.of Administrators =
		<?php
		error_reporting(0);
		/*IMPORTING DATABASE CONNECTION FILE*/
	
		include("../php/dbconfig.php");
			
		$tbl_name="tblusers";
		$sql="SELECT COUNT(EmailAddress) AS amount_sum FROM $tbl_name WHERE Type=('Admin')";
		$result = mysql_query($sql);
        $row=mysql_fetch_assoc($result);
        $sum =$row['amount_sum'];
        echo $sum;
        ?>
    </td></tr>
</table>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="EditRegion4" -->

<!-- ADMIN ADD/DELETE FORM -->

<form id="Admin" name="formAdmin" method="post" action="../php/adminUpdate.php"  onsubmit="return validateForm()">
<table width="631" align="center"  class="tblAdminForms">
    <tr>
        <td></td><td width="470" ><label>
              <input type="radio" name="rdbType" value="Add" id="rdbType0" onclick="checkBtnAdd()"/>Add</label><label>
              <input type="radio" name="rdbType" value="Remove" id="rdbType1" onclick="checkBtnRemove()"/>Remove</label>
        </td>
    </tr>
    <tr><td width="219" align="right">E-Mail</td><td width="470"> <input type="text" id="Email" name="txtEmail" size="50" disabled="true"/> </td></tr>
    <tr><td colspan="2" align="center">(Password must contain atleast 6 characters)</td></tr>
    <tr><td  align="right">Password</td><td><input type="password" id="Password" name="txtPassword" size="50" disabled="true"/></td></tr>
    <tr><td  align="right">Confirm Password</td><td><input type="password" id="CPassword" name="txtCPassword" size="50" disabled="true"/></td></tr>
	<tr><td align="right">First Name</td><td><input type="text" id="FName" name="txtFName" size="50" disabled="true"/>
		<input type="submit" class="adminBtn" name="btnAdd" id="Add" value="Add" disabled="disabled" /></td></tr>
	<tr><td align="right">Last Name</td><td><input type="text" id="LName" name="txtLName" size="50" disabled="true"/>
		<input type="submit" class="adminBtn" name="btnRemove" id="Remove" value="Remove" disabled="disabled" onclick="setNullValues()" /></td></tr>
	<tr><td align="right">Phone Number</td><td><input type="text" id="Phone" name="txtPhone" size="50" disabled="true"/>
		<input type="reset" class="adminBtn" id="Reset" value="Reset" onclick="return resetFields()"/>
	</td></tr> 
</table>
</form>
<p>&nbsp;</p>
<table class="tblHead" align="center">
  <tr><td >Administrator Details - SAVEUS.COM</td></tr>
</table>

<!-- DISPLAY CURRENT ADMINS -->

<table class="tblHead" align="center">
<?php
error_reporting(0);
/*IMPORTING DATABASE CONNECTION FILE*/
	
include("../php/dbconfig.php");
		
$tbl_name="tblusers";
$sql="SELECT * FROM $tbl_name WHERE Type=('Admin')";
$result = mysql_query($sql);

echo "
<table class=reportDetail align=center>
<tr>
	<td>Email Address</td>
	<td>First Name</td>
	<td>Last Name</td>
	<td>Phone Number</td>
</tr>
<tr><td colspan=4><hr></td></tr>";
while($row = mysql_fetch_array($result)){
  echo "<tr>";
  echo "<td class=NewsData>" . $row['EmailAddress'] . "</td>";
  echo "<td class=NewsHead>" . $row['FirstName'] . "</td>";
  echo "<td class=NewsData>" . $row['LastName'] . "</td>";
  echo "<td class=NewsData>" . $row['PhoneNumber'] . "</td>";
  echo "</tr>";
}  
echo "</table>";
?>
<!-- InstanceEndEditable -->
</body>
<!-- InstanceEnd --></html>
