<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/tmpAdmin.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>::|SAVEUS - UPDATE CHILDREN|::</title>
<!--IMPORT STYLESHEETS -->

<link href="../css/admin.css" type="text/css" rel="stylesheet"/>
<link href="../css/buttons.css" type="text/css" rel="stylesheet"/>

<!--IMPORT JAVASCRIPTS -->

<script src="../js/adminUpdateChild.js" type="text/javascript" language="javascript"></script>
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
	<tr><td >SAVEUS.COM - UPDATE CHILDREN DETAILS</td></tr>
</table>
<table class="tblHead" align="center">
	<tr><td class="reportHeading" align="right" >No.of Registered Children =
		<?php
		error_reporting(0);
		/*IMPORTING DATABASE CONNECTION FILE*/
	
		include("../php/dbconfig.php");
			
			$tbl_name="tblchildren";
			$sql="SELECT COUNT(ChildId) AS amount_sum FROM $tbl_name";
			$result = mysql_query($sql);
		
			$row=mysql_fetch_assoc($result);
			$sum =$row['amount_sum'];
			echo $sum;
		?>
	</td></tr>
</table>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="EditRegion4" -->

<!-- DELETE CHILDREN FORM -->

<form id="DeleteChild" name="formDeleteChild" enctype="multipart/form-data" method="post" action="../php/removeChild.php" target="_self" onsubmit="return validateForm2()">
    <table align="center" class="tblGeneral">
    <tr><td width="342"></td><td width="606" >REMOVE</td></tr>
    <tr><td width="340" align="right">Child ID</td><td width="608">
        <input type="text" id="DCId" name="txtDCId" size="50"/>
        <input type="submit" class="adminBtn" name="btnRemove" id="Remove" value="Remove"/>
    </td></tr>
    <tr><td colspan="2"><hr /></td></tr>
</table>     
</form>

<!-- EDIT CHILDREN FORM -->

<form id="EditChild" name="formEditChild" enctype="multipart/form-data" method="post" action="../php/editChild.php" target="_self" onsubmit="return validateForm1()">
<table align="center" class="tblGeneral">
    <tr><td></td><td width="470" >EDIT</td></tr></td></tr>
    <tr><td width="340" align="right">Child ID</td><td width="608"><input type="text" id="CId" name="txtCId" size="50"/></td></tr>
    <tr><td width="340" align="right">Name</td><td width="608"><input type="text" id="Name" name="txtName" size="50"/></td></tr>
    <tr><td align="right">Age</td><td><input type="text" id="Age" name="txtAge" size="50"/></td></tr>
    <tr><td colspan="2" align="center">(Maximum 300 Characters)</td></tr>
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
  <tr><td >Children Details - SAVEUS.COM</td></tr>
</table>
<table class="tblHead" align="center">

<!-- SHOW CURRENT CHILDREN DETAILS -->

<?php
error_reporting(0);
/*IMPORTING DATABASE CONNECTION FILE*/
	
include("../php/dbconfig.php");
			
$tbl_name="tblchildren";
$sql="SELECT * FROM $tbl_name";
$result = mysql_query($sql);

echo "
<table class=reportDetail align=center>
<tr>
	<td>Child ID</td>
	<td>Photo</td>
	<td>Name</td>
	<td>Age</td>
	<td>Description</td>
</tr>
<tr>
	<td colspan=5><hr></td>
</tr>";
while($row = mysql_fetch_array($result)){
	echo "<tr>";
	echo "<td class=NewsData>" . $row['ChildId'] . "</td>";
	echo "<td class=NewsData><img src=data:image/jpeg;base64," . base64_encode($row['ChildPhoto']) . " width=100 height=100>" . "</td>";
	echo "<td class=NewsHead>" . $row['ChildName'] . "</td>";
	echo "<td class=NewsData>" . $row['ChildAge'] . "</td>";
	echo "<td class=NewsData align=left>" . $row['ChildDesc'] . "</td>";
	echo "</tr>";
}
echo "</table>";
?>
<!-- InstanceEndEditable -->
</body>
<!-- InstanceEnd --></html>
