<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/tmpAdmin.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>::|SAVEUS - UPDATE PROJECTS|::</title>
<!-- IMPORT STYLESHEETS -->

<link href="../css/admin.css" type="text/css" rel="stylesheet"/>
<link href="../css/buttons.css" type="text/css" rel="stylesheet"/>

<!-- IMPORT JAVASCRIPTS -->

<script src="../js/adminUpdateProject.js" type="text/javascript" language="javascript"></script>
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
	<tr><td >SAVEUS.COM - UPDATE PROJECT DETAILS</td></tr>
</table>
<table class="tblHead" align="center">
	<tr><td class="reportHeading" align="right" >No.of Projects =
		<?php
		error_reporting(0);	
		/*IMPORTING DATABASE CONNECTION FILE*/
			
		include("../php/dbconfig.php");
			
		$tbl_name="tblprojects";
		$sql="SELECT COUNT(ProjectId) AS amount_sum FROM $tbl_name";
		$result = mysql_query($sql);
        $row=mysql_fetch_assoc($result);
        $sum =$row['amount_sum'];
        echo $sum;
        ?>
	</td></tr>
</table>

<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="EditRegion4" -->

<!-- DELETE PROJECT FORM -->

<form id="DeleteProject" name="formDeleteProject" enctype="multipart/form-data" method="post" action="../php/removeProject.php" target="_self" onsubmit="return validateForm2()">
<table align="center" class="tblGeneral">
    <tr><td width="342"></td><td width="606" >REMOVE</td></tr>
    <tr><td width="340" align="right">Project ID</td><td width="608">
        <input type="text" id="PId" name="txtPId" size="50"/>
        <input type="submit" class="adminBtn" name="btnRemove" id="Remove" value="Remove"/>
    </td></tr>
    <tr><td colspan="2"><hr /></td></tr>
</table>     
</form>

<!-- UPDATE PROJECT FORM -->

<form id="EditProject" name="formEditProject" enctype="multipart/form-data" method="post" action="../php/editProject.php" target="_self" onsubmit="return validateForm1()">
<table align="center" class="tblGeneral">
    <tr><td></td><td width="470" >EDIT</td></tr></td></tr>
    <tr><td width="340" align="right">Project ID</td><td width="608"><input type="text" id="PId" name="txtPId" size="50"/></td></tr>
    <tr><td colspan="2" align="center">(Maximum 30 Characters)</td></tr>
    <tr><td width="340" align="right">Project Name</td><td width="608"><input type="text" id="Name" name="txtName" size="50"/></td></tr>
    <tr><td colspan="2" align="center">(Maximum 50 Characters)</td></tr>
    <tr><td align="right">Purpose</td><td><input type="text" id="Purpose" name="txtPurpose" size="50"/></td></tr>
    <tr><td colspan="2" align="center">(Maximum 500 Characters)</td></tr>
    <tr><td align="right">Description</td><td><textarea id="Desc" name="txtDesc" rows="5" cols="39"></textarea></td></tr>
    <tr><td colspan="2" align="center">(Less than 1MB)</td></tr>
    <tr><td align="right">Photo</td><td><input type="file" id="Photo" name="imgPhoto"/></td></tr>
    <tr><td colspan="2" align="center">
        <input type="submit" class="adminBtn" name="btnEdit" id="Edit" value="Edit"/>
        <input type="reset" class="adminBtn" id="Reset" value="Reset"/>
    </td></tr>
</table>
</form>
<p>&nbsp;</p>
<table class="tblHead" align="center">
  <tr><td >Project Details - SAVEUS.COM</td></tr>
</table>

<!-- SDISPLAY CURRENT PROJECT DETAILS -->

<table class="tblHead" align="center">
<?php
error_reporting(0);
/*IMPORTING DATABASE CONNECTION FILE*/
			
include("../php/dbconfig.php");
			
$tbl_name="tblprojects";
$sql="SELECT * FROM $tbl_name";
$result = mysql_query($sql);

echo "
<table class=reportDetail align=center>
<tr>
	<td>Project ID</td>
	<td>Photo</td>
	<td>Name</td>
	<td>Purpose</td>
	<td>Description</td>
</tr>
<tr><td colspan=5><hr></td></tr>";
while($row = mysql_fetch_array($result)){
	echo "<tr>";
	echo "<td class=NewsData>" . $row['ProjectId'] . "</td>";
	echo "<td class=NewsData><img src=data:image/jpeg;base64," . base64_encode($row['Projectphoto']) . " width=100 height=100>" . "</td>";
	echo "<td class=NewsHead>" . $row['ProjectName'] . "</td>";
	echo "<td class=NewsData>" . $row['Purpose'] . "</td>";
	echo "<td class=NewsData align=left>" . $row['Projectdesc'] . "</td>";
	echo "</tr>";
} 
echo "</table>";
?>
<!-- InstanceEndEditable -->
</body>
<!-- InstanceEnd --></html>
