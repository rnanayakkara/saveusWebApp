<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/tmpAdmin.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>::|SAVEUS - DONATIONS REPORT|::</title>
<!-- IMPORT STYLESHEETS -->

<link href="../css/admin.css" type="text/css" rel="stylesheet"/>
<link href="../css/buttons.css" type="text/css" rel="stylesheet"/>
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
<?php
error_reporting(0);

/*RETREIVING SELECTED DATE AND CHANGE FORMAT*/

$date = $_POST['dtmPicker'];
$newDate = date('Y-m-d', strtotime($date));
?>
<table class="tblHead" align="center">
  <tr><td >DONATIONS REPORT - <?php echo $newDate; ?></td></tr>
</table>
<table class="tblHead" align="center">
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="EditRegion4" -->
<?php
error_reporting(0);

/*IMPORTING DATABASE CONNECTION FILE*/
	
include("../php/dbconfig.php");
	
$tbl_name="tbldonations";
$sql="SELECT * FROM $tbl_name WHERE Date=('$newDate')";
$result = mysql_query($sql);

/*SHOW DONATIONS IN A TABLE*/

echo "
<table class=reportDetail align=center>
	<tr><td>DonationID</td>
		<td>User Email</td>
		<td>Type</td>
		<td>Amount</td></tr>
	<tr><td colspan=4><hr></td>
	</tr>";

	while($row = mysql_fetch_array($result)){
	  echo "<tr>";
	  echo "<td class=NewsData>" . $row['DonationId'] . "</td>";
	  echo "<td class=NewsHead>" . $row['UserName'] . "</td>";
	  echo "<td class=NewsData>" . $row['Type'] . "</td>";
	  echo "<td class=NewsData>" . $row['Amount'] . "</td>";
	  echo "</tr>";
	}
  
echo "
</table>";

/*SHOW DONATIONS SUMMARY*/

echo "
<table class=reportDetail align=center>
	<tr>
	<td><hr></td>
	</tr>
	<tr>
	<td align=right class=reportSummary >Total :";
	$tbl_name="tbldonations";
	$sql="SELECT SUM(Amount) AS amount_sum FROM $tbl_name WHERE Date=('$newDate')";
	$result = mysql_query($sql);
	$row=mysql_fetch_assoc($result);
	$sum =$row['amount_sum'];
	echo "$".$sum;
?>
</td></tr>
<tr><td ><hr></td></tr>
</table>
  <!-- InstanceEndEditable -->
</body>
<!-- InstanceEnd --></html>
