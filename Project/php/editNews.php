<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>::|SAVEUS - ADMINISTRATOR|::</title>
<link href="../css/admin.css" type="text/css" rel="stylesheet"/>
<link href="../css/buttons.css" type="text/css" rel="stylesheet"/>
</head>

<body>
<?php
error_reporting(0);

/*RETREIVING DATA FROM FROM*/

$nid = $_POST['txtNId'];
$heading = $_POST['txtHeading'];
$details = $_POST['txtDetails'];

/*IMPORTING DATABASE CONNECTION FILE*/
	
include("../php/dbconfig.php");
	
$tbl_name="tblnews";
$sql="UPDATE $tbl_name SET NewsHeading =('$heading'), NewsDetail=('$details') WHERE NewsId=('$nid')";
$result = mysql_query($sql);

/*REDIRECTING TO NEWS PAGE*/

header('Location: ../php/updateNews.php');
?>
</body>
</html>