<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>::|REMOVE CHILDREN|::</title>
</head>
<body>
<?php
error_reporting(0);

/*RETREIVING CHILD ID FROM FORM*/

$cid=$_POST['txtDCId'];

/*IMPORTING DATABASE CONNECTION FILE*/
	
include("../php/dbconfig.php");
	
$tbl_name="tblchildren";
$sql="DELETE FROM $tbl_name WHERE ChildId=('$cid')";
$result = mysql_query($sql);

/*REDIRECTING TO CHILDREN'S PAGE*/

header( 'Location: ../php/updateChild.php' );	
?>
</body>
</html>