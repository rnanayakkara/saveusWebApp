<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/tmpMsgs.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>::|SAVE US - UPDATE CHILD DETAILS|::</title>
<!--IMPORTING STYLESHEETS -->

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

$cid=$_POST['txtCId'];
$name=$_POST['txtName'];
$age=$_POST['txtAge'];
$desc=$_POST['txtDesc'];
$image=$_FILES['imgPhoto'];

if (isset($_FILES['imgPhoto']) && $_FILES['imgPhoto']['size'] > 0 && $_FILES['imgPhoto']['size'] <=1024000) {

// Temporary file name stored on the server

$tmpName = $_FILES['imgPhoto']['tmp_name'];

// Read the file

$fp = fopen($tmpName, 'r');
$data = fread($fp, filesize($tmpName));
$data = addslashes($data);
fclose($fp);

/*IMPORTING DATABASE CONNECTION FILE*/
	
include("../php/dbconfig.php");
	
$tbl_name="tblchildren";
$sql="UPDATE $tbl_name SET ChildName=('$name'), ChildPhoto=('$data'), ChildAge=('$age'),ChildDesc=('$desc') WHERE ChildId=('$cid')";
$result = mysql_query($sql);

	if($result !=0){
	header( 'Location: ../php/updateChild.php' );
	}
	else{
	echo "
	<table class=tblHead align=center>
	<tr><td >Unable to Update Child Details</td></tr>
	</table>
	<table class=tblLinksHome align=center>
	<tr><td bgcolor=#FFF><a href=../html/admin.html>GO TO ADMIN HOME	</a>|<a href=../php/updateChild.php>	RETRY</a></td></tr>
	</table>";	
	}
}
else{
	echo "
	<table class=tblHead align=center>
	<tr><td >Unable to Update Child Details. Image Size too Large</td></tr>
	</table>
	<table class=tblLinksHome align=center>
	<tr><td bgcolor=#FFF><a href=../html/admin.html>GO TO ADMIN HOME	</a>|<a href=../php/updateChild.php>	RETRY</a></td></tr>
	</table>";
}
?>

<!-- InstanceEndEditable -->

</body>
<!-- InstanceEnd --></html>
