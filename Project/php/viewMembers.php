<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/tmpAdmin.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>::|SAVEUS - REGISTERED MEMBERS|::</title>
<!-- IMPORT STYLESHEET -->

<link href="../css/admin.css" type="text/css" rel="stylesheet"/>
<link href="../css/buttons.css" type="text/css" rel="stylesheet"/>

<!-- IMPORT JAVASCRIPT -->

<script src="../js/adminViewMembers.js" type="text/javascript" language="javascript"></script>

<!-- SCRIPTS FOR CALENDAR -->

<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
  
<script>
  $(document).ready(function() {
    $("#datepicker").datepicker();
  });
</script>
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
	<tr><td class="reportHeading" align="right" >Total Amount of Members :
	<?php
	error_reporting(0);
	/*IMPORTING DATABASE CONNECTION FILE*/
	
	include("../php/dbconfig.php");
		
	$tbl_name="tblusers";
	$sql="SELECT COUNT(Type) AS amount_sum FROM $tbl_name WHERE Type=('User')";
	$result = mysql_query($sql);
	$row=mysql_fetch_assoc($result);
	$sum =$row['amount_sum'];
	echo $sum;
	$today = date("Y/m/d");
	?>
  	</td></tr>
</table>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="EditRegion4" -->

<!-- CALENDAR FORM -->

<form id="MembersReport" name="formMembersReport" enctype="multipart/form-data" method="post" action="../php/viewMembersByDate.php" target="_self" onsubmit="return validateForm2()">
<table class="tblSelectDate" align="center">
    <tr><td>
    <p >Set Registered Date (YYYY / MM / DD)
      <input id="datepicker" name="dtmPicker"/><input type="submit" name="btnSubmit" value="View" class="adminBtn"/>
    </p>
    </td></tr>
</table>
</form>

<hr width="960px" align="center"/>

<!-- DELETE FORM -->

<form id="DeleteMember" name="formDeleteMember" enctype="multipart/form-data" method="post" action="../php/removeMember.php" target="_self" onsubmit="return validateForm()">
<table align="center" class="tblGeneral">
    <tr><td width="342"></td><td width="606" >REMOVE</td></tr>
    <tr><td width="340" align="right">Email Address</td><td width="608">
        <input type="text" id="Email" name="txtEmail" size="50"/>
        <input type="submit" class="adminBtn" name="btnRemove" id="Remove" value="Remove"/></td></tr>
    <tr><td colspan="2"><hr /></td></tr>
</table>     
</form>

<!-- DISPLAY ALL MEMBERS -->

<table class="tblHead" align="center">
<?php
error_reporting(0);
/*IMPORTING DATABASE CONNECTION FILE*/
	
include("../php/dbconfig.php");
		
$tbl_name="tblusers";
$sql="SELECT * FROM tblusers WHERE Type=('User')";
$result = mysql_query($sql);

echo "
<table class=reportDetail align=center>
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
	echo "<td class=NewsHead >" . $row['RegDate'] . "</td>";
	echo "<td class=NewsData align='left'>" . $row['FirstName'] . "</td>";
	echo "<td class=NewsData align=left>" . $row['LastName'] . "</td>";
	echo "<td class=NewsData >" . $row['Country'] . "</td>";
	echo "<td class=NewsData >" . $row['PhoneNumber'] . "</td>";
	echo "</tr>";
} 
echo "</table>";
?>
<!-- InstanceEndEditable -->
</body>
<!-- InstanceEnd --></html>
