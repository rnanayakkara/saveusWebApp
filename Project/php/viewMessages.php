<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/tmpAdmin.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>::|ADMIN MESSAGES|::</title>
<!-- IMPORT STYLESHEETS -->

<link href="../css/admin.css" type="text/css" rel="stylesheet"/>
<link href="../css/buttons.css" type="text/css" rel="stylesheet"/>

<!-- SCRIPTS RELATED TO CALENDAR -->

<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
<script>
  $(document).ready(function() {
    $("#datepicker").datepicker();
  });
</script>
<script src="../js/adminViewMessages.js" type="text/javascript" language="javascript"></script>
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

<!-- CALENDAR FORM -->

<form id="Messages" name="formMessages" enctype="multipart/form-data" method="post" action="../php/messagesByDate.php" target="_self" onsubmit="return validateForm()">
<table class="tblSelectDate" align="center">
	<tr><td>
        <p>Set Date (YYYY / MM / DD)
          <input id="datepicker" name="dtmPicker"/><input type="submit" name="btnSubmit" value="View" class="adminBtn"/>
        </p>
    </td></tr>
</table>
</form>

<table class="tblHead" align="center">
  <tr><td >USER MESSAGES - <?php $today = date("Y/m/d"); echo $today; ?></td></tr>
</table>

<!-- USER MESSAGES SENT TODAY -->

<table class="tblHead" align="center">

<?php
error_reporting(0);
/*IMPORTING DATABASE CONNECTION FILE*/
	
include("../php/dbconfig.php");
		
$tbl_name="tblmessages";
$sql="SELECT * FROM $tbl_name WHERE MessageDate=('$today')";
$result = mysql_query($sql);

echo "
<table class=reportDetail align=center>
<tr>
	<td>Name</td>
	<td>Email</td>
	<td>Phone Number</td>
	<td>Message</td>
</tr>
<tr><td colspan=4><hr></td></tr>";

while($row = mysql_fetch_array($result)){
	echo "<tr>";
	echo "<td class=NewsData>" . $row['Name'] . "</td>";
	echo "<td class=NewsHead>" . $row['Email'] . "</td>";
	echo "<td class=NewsData>" . $row['Phone'] . "</td>";
	echo "<td class=NewsData>" . $row['Message'] . "</td>";
	echo "</tr>";
} 
echo "</table>";
?>
<!-- InstanceEndEditable -->
</body>
<!-- InstanceEnd --></html>
