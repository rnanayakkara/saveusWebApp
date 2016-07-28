<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/tmpAdmin.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>::|SAVEUS - UPDATE NEWS|::</title>
<!-- IMPORT STYLESHEETS -->

<link href="../css/admin.css" type="text/css" rel="stylesheet"/>
<link href="../css/buttons.css" type="text/css" rel="stylesheet"/>

<!-- IMPORT JAVASCRIPTS -->

<script src="../js/adminUpdateNews.js" type="text/javascript" language="javascript"></script>
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
	<tr><td >SAVEUS.COM - UPDATE NEWS</td></tr>
</table>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="EditRegion4" -->

<!-- UPDATE NEWS FORM -->

<form id="EditNews" name="formEditNews" enctype="multipart/form-data" method="post" action="../php/editNews.php" target="_self" onsubmit="return validateForm()">
<table align="center" class="tblGeneral">
    <tr><td width="340" align="right">News ID</td><td width="608"><input type="text" id="NId" name="txtNId" size="50"/></td></tr>
    <tr><td colspan="2" align="center">(Maximum 30 Characters)</td></tr>
    <tr><td width="340" align="right">Heading</td><td width="608"><input type="text" id="Heading" name="txtHeading" size="50"/></td></tr>
    <tr><td colspan="2" align="center">(Maximum 1000 Characters)</td></tr>
    <tr><td align="right">Description</td><td><textarea id="Details" name="txtDetails" rows="5" cols="39"></textarea></td></tr>
    <tr><td colspan="2" align="center">
        <input type="submit" class="adminBtn" value="Submit"/>
        <input type="reset" class="adminBtn" id="Reset" value="Reset"/>
    </td></tr>
</table>
</form>
<p>&nbsp;</p>
<table class="tblHead" align="center">
  <tr><td >Current News on Home Page - SAVEUS.COM</td></tr>
</table>
<table class="tblHead" align="center">

<!-- DISPLAY CURRENT NEWS -->

<?php
error_reporting(0);

/*IMPORTING DATABASE CONNECTION FILE*/
	
include("../php/dbconfig.php");
	
$tbl_name="tblnews";
$sql="SELECT * FROM $tbl_name";
$result = mysql_query($sql);

echo "
<table class=reportDetail align=center>
<tr>
	<td>News Id</td>
	<td>Heading</td>
	<td>Details</td>
</tr>
<tr><td colspan=3><hr></td></tr>";
while($row = mysql_fetch_array($result)){
	echo "<tr>";
	echo "<td class=NewsData>" . $row['NewsId'] . "</td>";
	echo "<td class=NewsHead>" . $row['NewsHeading'] . "</td>";
	echo "<td class=NewsData align=left>" . $row['NewsDetail'] . "</td>";
	echo "</tr>";
} 
echo "</table>";
?>
<!-- InstanceEndEditable -->
</body>
<!-- InstanceEnd --></html>
