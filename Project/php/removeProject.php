<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>::|SAVEUS - REMOVE PROJECT|::</title>
</head>
<body>
<?php
error_reporting(0);

/*RETREIVING PROJECT ID*/

$pid=$_POST['txtPId'];

/*IMPORTING DATABASE CONNECTION FILE*/
	
include("../php/dbconfig.php");
	
$tbl_name="tblprojects";
$sql="DELETE FROM $tbl_name WHERE ProjectId=('$pid')";
$result = mysql_query($sql);

/*REDIRECTING TO MEMBERS PAGE*/

header( 'Location: ../php/updateProject.php' );	
?>

</body>
</html>