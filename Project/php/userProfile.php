<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/tmpMain.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>::|USER PROFILE|::</title>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<!--IMPORTING STYLESHEETS-->

<link href="../css/styles1.css" type="text/css" rel="stylesheet"/>
<link href="../css/buttons.css" type="text/css" rel="stylesheet"/>

<!--IMPORTING JAVESCRIPTS-->

<script src="../js/userProfileButtonActions.js" type="text/javascript" language="javascript"></script>

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
header( 'Location: ../php/userloginform.php' ) ;
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
<?php
error_reporting(0);
/*SHOW USER DONATION SUMMARY*/

echo "
<p>
<table class=tableSummaries align=center>
<tr><td align=right> Your Donation Summary ";

/*IMPORTING DATABASE CONNECTION FILE*/
	
include("../php/dbconfig.php");
    
/*RECEIVING DONATION SUMMARY FROM DATABASE*/

$email=$_SESSION['userEmail'];   
$tbl_name="tbldonations";
$sql="SELECT SUM(Amount) AS amount_sum FROM $tbl_name WHERE UserName=('$email')";
$result=mysql_query($sql);
$row=mysql_fetch_assoc($result);
$sum =$row['amount_sum'];
if ($sum==0 || $sum == null){
echo " is $0".$sum;
}
else{
	echo " is $".$sum;
}
echo "</td></tr></table>
</p>";
echo "
<table class=tableFormRegister align=center>
	<tr><td><h2>USER PROFILE -". $_SESSION['userFName']." ".$_SESSION['userLName']."</h2></td></tr>
</table>";
?>

<!--USER PROFILE DETAILS FORM-->

<table class="formData" align="center">
    <tr>
        <td class="formLabel" >E-Mail	:</td>
        <td colspan="2" ><label><?php echo $_SESSION['userEmail']; ?></label></td>
    </tr>
    <tr>
    	<td colspan="3"><hr /></td>
    </tr>
    <tr>
        <td class="formLabel">Password</td>
        <td  colspan="2" align="right"><input type="submit" value="Change" class="generalBtn" onclick="gotoPassword()"/></td>
    </tr>
    <tr>
    	<td colspan="3"><hr /></td>
    </tr>
    <tr>
        <td width="304" class="formLabel">First Name	:</td>
        <td width="258"><label><?php echo $_SESSION['userFName']; ?></label></td>
    </tr>
    <tr>
        <td class="formLabel">Last Name		:</td>
        <td><label><?php echo $_SESSION['userLName']; ?></label></td>
        <td width="82"><input type="submit" value="Edit" class="generalBtn" onclick="gotoName()"/></td>
    </tr>
    <tr>
   	 	<td colspan="3"><hr /></td>
    </tr>
    <tr>
        <td class="formLabel">Country	:</td>
        <td><label><?php echo $_SESSION['userCountry']; ?></label></td>
    </tr>
    <tr>
        <td class="formLabel">Phone Number	:</td>
        <td><label><?php echo $_SESSION['userPhone']; ?></label></td>
        <td><input type="submit" value="Edit" class="generalBtn" onclick="gotoPhone()"/></td>
    </tr>
    <tr>
    	<td colspan="3"><hr /></td>
    </tr>
    <tr>
        <td class="formLabel">Card Type		:</td>
        <td><label><?php echo $_SESSION['userCardType']; ?></label></td>
    </tr>
    <tr>
        <td class="formLabel">Card Number	:</label></td>
        <td><label><?php echo $_SESSION['userCardNo']; ?></label></td>
        <td><input type="submit" value="Edit" class="generalBtn" onclick="gotoCard()"/></td>
    </tr>
</table>
<p>&nbsp;</p>
<!-- InstanceEndEditable -->

<!--FOOTER DESIGN-->
<!-- InstanceBeginEditable name="EditRegion5" -->

<!-- InstanceEndEditable -->
</body>
<!-- InstanceEnd --></html>
