<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/tmpAdmin.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>::|SAVEUS - DONATIONS REPORT|::</title>

<!-- IMPORT STYLESHEET -->
<link href="../css/admin.css" type="text/css" rel="stylesheet"/>
<link href="../css/buttons.css" type="text/css" rel="stylesheet"/>

<!-- RELATED TO CALENDAR -->
  <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
  
  <script>
  $(document).ready(function() {
    $("#datepicker").datepicker();
  });
  </script>
  
<script src="../js/dtmPicker.js" type="text/javascript" language="javascript"></script>
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
<table class="tblHead" align="center">
<tr><td class="reportHeading" align="right" >Total Amount of Donations :
<?php
error_reporting(0);

/*IMPORTING DATABASE CONNECTION FILE*/
	
include("../php/dbconfig.php");

/*CALCULATING DONATIONS SUMMARY*/

$tbl_name="tblDonations";
$sql="SELECT SUM(Amount) AS amount_sum FROM $tbl_name";
$result = mysql_query($sql);
$row=mysql_fetch_assoc($result);
$sum =$row['amount_sum'];
echo "$".$sum;
$today = date("Y/m/d");
?>
</td></tr>
</table>

<!-- DATE TIME PICKER -->

<form id="DonationsReport" name="formDonationsReport" enctype="multipart/form-data" method="post" action="../php/donationReportByDate.php" target="_self" onsubmit="return validateForm()">
<table class="tblSelectDate" align="center">
    <tr><td>
        <p >Set Date (YYYY / MM / DD)
          <input id="datepicker" name="dtmPicker"/><input type="submit" name="btnSubmit" value="View" class="adminBtn"/>
        </p>
    </td></tr>
</table>
</form>
<table class="tblHead" align="center">
  <tr><td >DONATIONS REPORT - <?php echo $today; ?></td></tr>
</table>
<table class="tblHead" align="center">
<?php

/*IMPORTING DATABASE CONNECTION FILE*/
	
include("../php/dbconfig.php");

/*SHOWING DONATIONS TODAY*/

$tbl_name="tblDonations";
$sql="SELECT * FROM $tbl_name WHERE Date=('$today')";
$result = mysql_query($sql);
echo "
<table class=reportDetail align=center>
	<tr>
		<td>DonationID</td>
		<td>User Email</td>
		<td>Type</td>
		<td>Amount</td>
	</tr>
<tr><td colspan=4><hr></td></tr>";
while($row = mysql_fetch_array($result)){
  echo "<tr>";
  echo "<td class=NewsData>" . $row['DonationId'] . "</td>";
  echo "<td class=NewsHead>" . $row['UserName'] . "</td>";
  echo "<td class=NewsData>" . $row['Type'] . "</td>";
  echo "<td class=NewsData>" . $row['Amount'] . "</td>";
  echo "</tr>";
}  
echo "</table>";
echo "
<table class=reportDetail align=center>
<tr><td><hr></td></tr>
<tr><td align=right class=reportSummary >Total :";

/*SHOWING TOTAL DONATIONS TODAY*/

$tbl_name="tblDonations";
$sql="SELECT SUM(Amount) AS amount_sum FROM $tbl_name WHERE Date=('$today')";
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
