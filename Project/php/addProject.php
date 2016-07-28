<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/tmpMsgs.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>::|SAVE US - MANAGE PROJECTS|::</title>
<!-- IMPORT STYLESHEETS -->

<link href="../css/admin.css" type="text/css" rel="stylesheet"/>
<link href="../css/buttons.css" type="text/css" rel="stylesheet"/>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
</head>

<body>
<!--HEADER DESIGN-->

<table align="center">
<tr><td><img src="../images/Logo.png" width="250px" height="90px"/></td></tr>
</table>
<!-- InstanceBeginEditable name="EditRegion3" -->
<?php
error_reporting(0);

/*RETREIVING DATA FROM FROM*/

$Pname=$_POST['txtPname'];
$Pur=$_POST['txtPurpose'];
$Pdesc=$_POST['txtPdesc'];
$Pimage=$_FILES['imgPphoto'];

if (isset($_FILES['imgPphoto']) && $_FILES['imgPphoto']['size'] > 0 && $_FILES['imgPphoto']['size'] <=1024000) {

// Temporary file name stored on the server
$tmpName = $_FILES['imgPphoto']['tmp_name'];

// Read the file
$fp = fopen($tmpName, 'r');
$data = fread($fp, filesize($tmpName));
$data = addslashes($data);
fclose($fp);

/*IMPORTING DATABASE CONNECTION FILE*/
	
include("../php/dbconfig.php");
	
$tbl_name="tblprojects";
$sql="INSERT INTO $tbl_name (ProjectName,Projectphoto,Purpose,Projectdesc) VALUES ('$Pname', '$data',  '$Pur', '$Pdesc')";
$result = mysql_query($sql);

	if($result !=0){
	echo "
		<table class=tblHead align=center>
		<tr><td >".$name." Project Successfully Registered at SAVEUS.COM</td></tr>
		</table>
		<table class=tblLinksHome align=center>
		<tr><td bgcolor=#FFF><a href=../php/admin.php>GO TO ADMIN HOME	</a>|<a href=../php/addNewProject.php>	ADD ANOTHER PROJECT</a></td></tr>
		</table>";
	}
	else{
	echo "
	<table class=tblHead align=center>
	<tr><td >Unable to Register ".$name." Project at SAVEUS.COM</td></tr>
	</table>
	<table class=tblLinksHome align=center>
	<tr><td bgcolor=#FFF><a href=../html/admin.html>GO TO ADMIN HOME	</a>|<a href=../php/addNewProject.php>	RETRY</a></td></tr>
	</table>";	
	}
}
else{
	echo "
	<table class=tblHead align=center>
	<tr><td >Unable to Register ".$name." Project at SAVEUS.COM. Image Size too Large</td></tr>
	</table>
	<table class=tblLinksHome align=center>
	<tr><td bgcolor=#FFF><a href=../html/admin.html>GO TO ADMIN HOME	</a>|<a href=../php/addNewProject.php>	RETRY</a></td></tr>
	</table>";
}
?>
<!-- InstanceEndEditable -->

</body>
<!-- InstanceEnd --></html>
