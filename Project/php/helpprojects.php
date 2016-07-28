<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/tmpMain.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>::|HELP PROJECTS|::</title>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<!--IMPORTING STYLESHEETS-->

<link href="../css/styles1.css" type="text/css" rel="stylesheet"/>
<link href="../css/buttons.css" type="text/css" rel="stylesheet"/>

<!--IMPORTING JAVESCRIPTS-->

<script src="../js/DonateBtn.js" language="javascript" type="text/javascript"></script>
<!-- InstanceEndEditable -->
<!-- InstanceParam name="OptionalRegion1" type="boolean" value="true" -->
<!-- InstanceParam name="OptionalRegion2" type="boolean" value="true" -->
</head>

<body>
<!-- InstanceBeginEditable name="EditRegion4" -->
<?php
error_reporting(0);
session_start();

/*CHECK WHETHER THE USER IS ALREADY LOGGED IN AND SESSION VARIBLES ARE SET*/

if (isset($_SESSION['userFName'])){

echo "
<table class=tableHead align=center>
	<tr>
		<td><img src=../images/Logo.png width=250px height=90px/></td>
		<td class=register>HI <a class='k2rmTeam' href=../php/userProfile.php target=_self>";
		echo $_SESSION['userFName'];
		echo"</a></td>
		<td><a href=../php/userLogout.php target=_self>Logout</td>
	</tr>
</table>";
}
else{
echo "
<table class=tableHead align=center>
	<tr>
		<td><img src=../images/Logo.png width=250px height=90px/></td>
		<td class=register><a href=../php/userregistrationform.php target=_self>Register</a></td>
		<td><a  href=../php/userloginform.php target=_self>Login</td>
	</tr>
</table>";

}
?>
<!-- InstanceEndEditable -->
<!--HEADER DESIGN-->
<table class="tableNavigate" align="center">
<tr>
  <td class="NavigateData"><a href="../index.php" target="_self">HOME</a></td>
  <td class="NavigateData"><a href="meetchildren.php" target="_self">MEET CHILDREN</a></td>
  <td class="NavigateData"><a href="helpprojects.php" target="_self">HELP PROJECTS</a></td>
  <td class="NavigateData"><a href="contactus.php" target="_self">CONTACT US</a></td>
  <td ><a href="donate.php" target="_self"><input type="button" value="Donate" class="donateLinkBtn" /></a></td>
</tr>
</table>

<!-- InstanceBeginEditable name="EditRegion3" -->

<!--PROJECTS TABLE DESIGN - IMPORTING PROJECT DETAILS FROM THE DATABASE-->

<?php
/*IMPORTING DATABASE CONNECTION FILE*/
	
include("../php/dbconfig.php");
    
/*RECEIVING PROJECT DETAILS FROM DATABASE*/
    
$tbl_name="tblprojects";
$sql="SELECT * FROM $tbl_name";
$result=mysql_query($sql);

/*DISPLAYING PROJECT DETAILS*/

echo "<table class=tableNews align=center>";
while($row = mysql_fetch_array($result)){
	echo "<tr>";
  	echo "<td class=NewsHead>"; 
  	echo "<img src=data:image/jpeg;base64," . base64_encode($row['Projectphoto']) . " width=290 height=290>". "</td>";
  	echo "<td class=ChildData>" . $row['ProjectName'] ."<br><p align=center>".$row['Purpose']."</p><input type=submit class=donateBtn value=Donate onclick=gotoDonatePage() />". "</td>";
	echo "<td class=NewsData>" . $row['Projectdesc'] . "</td>";
  	echo "</tr>";
}
echo "</table>";
?>

<!-- InstanceEndEditable -->

<!--FOOTER DESIGN-->
<!-- InstanceBeginEditable name="EditRegion5" -->
<hr width="960px" align="center" />
<table class="tableFollowUs" align="center">
  <tr>
    <td class="FollowUsImages"><img class="FollowUsImages" src="../images/facebook.gif" title="Facebook" align="left"/></td>
    <td class="FollowUsImages"><img class="FollowUsImages" src="../images/twitter.png" title="Twitter" align="left"/></td>
    <td><img class="FollowUsImages" src="../images/youtube.png" title="YouTube" align="left"/></td>
  </tr>
</table>
<hr width="960px" align="center" />
<table class="tableNavigate" align="center">
  <tr>
    <td class="NavigateData"><a href="../index.php" target="_self">HOME</a></td>
    <td class="NavigateData"><a href="meetchildren.php" target="_self">MEET CHILDREN</a></td>
    <td class="NavigateData"><a href="helpprojects.php" target="_self">HELP PROJECTS</a></td>
    <td class="NavigateData"><a href="contactus.php" target="_self">CONTACT US</a></td>
    <td class="NavigateData"><a href="donate.php" target="_self">DONATE</a></td>
  </tr>
</table>
<table class="tableEnd" align="center">
  <tr>
    <td class="EndData">© 2015 -SAVE US. SAVE US is an organisation dedicated to the development and improvement of health, education and future opportunities of the children of Sri Lanka. Working closely with local organisations, communities and families.SAVE US is proudly Sri Lankan.</td>
  </tr>
  <tr>
    <td class="k2rmTeam"><a href="../html/k2rmTeam.html" class="k2rmTeam" target="_blank" >Designed & Developed by K2RM Solutions</a></td>
  </tr>
</table>
<!-- InstanceEndEditable -->
</body>
<!-- InstanceEnd --></html>
