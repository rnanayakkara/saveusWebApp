<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/tmpAdmin.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>::|SAVEUS - REGISTERED MEMBERS|::</title>
<!-- IMPORT STYLESHEETS -->

<link href="../css/admin.css" type="text/css" rel="stylesheet"/>
<link href="../css/buttons.css" type="text/css" rel="stylesheet"/>

<!-- IMPORT JAVASCRIPT -->

<script src="../js/adminViewMembersByDate.js" type="text/javascript" language="javascript"></script>
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

<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="EditRegion4" -->
<?php
error_reporting(0);
/* RETREIVING DATE FROM CALENDAR AND CHANGE FORMAT */

$date = $_POST['dtmPicker'];
$newDate = date('Y-m-d', strtotime($date));
?>

<!-- MEMBERS DELETE FORM -->

<form id="DeleteMember" name="formDeleteMember" enctype="multipart/form-data" method="post" action="../php/removeMember.php" target="_self" onsubmit="return validateForm()">
<table align="center" class="tblGeneral">
	<tr><td width="342"></td><td width="606" >REMOVE</td></tr>
	<tr><td width="340" align="right">Email Address</td><td width="608">
    	<input type="text" id="Email" name="txtEmail" size="50"/>
		<input type="submit" class="adminBtn" name="btnRemove" id="Remove" value="Remove"/></td></tr>
	<tr><td colspan="2"><hr /></td></tr></table>     
</form>
<table class="tblHead" align="center">

<!-- SHOW REGISTERED MEMBER ON THAT SELECTED DATE -->

<tr>
	<td >REGISTERED MEMBERS - <?php echo $newDate; ?></td></tr>
</table>
<table class="tblHead" align="center">
<?php
error_reporting(0);
/*IMPORTING DATABASE CONNECTION FILE*/
	
include("../php/dbconfig.php");
		
$tbl_name="tblusers";
$sql="SELECT * FROM $tbl_name WHERE RegDate=('$newDate') AND Type=('User')";
$result = mysql_query($sql);

echo "<table class=reportDetail align=center>
<tr>
	<td>Email</td>
	<td>Reg Date</td>
	<td>First Name</td>
	<td>Last Name</td>
	<td>Country</td>
	<td>Phone</td>
</tr>
<tr><td colspan=6><hr></td></tr>";
while($row = mysql_fetch_array($result)){
echo "<tr>";
	echo "<td class=NewsData align='left'>" . $row['EmailAddress'] . "</td>";
	echo "<td class=NewsHead align='left'>" . $row['RegDate'] . "</td>";
	echo "<td class=NewsData align='left'>" . $row['FirstName'] . "</td>";
	echo "<td class=NewsData align=left>" . $row['LastName'] . "</td>";
	echo "<td class=NewsData align=left>" . $row['Country'] . "</td>";
	echo "<td class=NewsData align=left>" . $row['PhoneNumber'] . "</td>";
	echo "</tr>";
} 
echo "</table>";
?>
<!-- InstanceEndEditable -->
</body>
<!-- InstanceEnd --></html>
