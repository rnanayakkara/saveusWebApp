<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/tmpMain.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Untitled Document</title>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<!--IMPORTING STYLESHEETS-->

<link href="../css/styles1.css" type="text/css" rel="stylesheet"/>
<link href="../css/buttons.css" type="text/css" rel="stylesheet"/>
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

/*SHOW USER DONATION SUMMARY*/

echo "
<p>
<table class=tableSummaries align=center>
<tr><td align=right>".$_SESSION[userFName]." Your Donation Summary ";

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
?>

<!--DONATIONS FORM-->

<table class="tableFormRegister" align="center">
	<tr><td><h2>PLEASE SUBMIT THE FORM TO ADD DONATIONS</h2></td></tr>
</table>
<form id="Donations" name="formDonations" method="post" action="../php/donations.php" target="_self">
<table class="formData" align="center">
<tr><td colspan="2" class="steps">Card Details</td></tr>
<tr><td class="formLabel">Card Type	:</td><td><?php echo $_SESSION['userCardType']; ?></td></tr>
<tr><td class="formLabel">Card Number	:</td><td><?php echo $_SESSION['userCardNo']; ?></td></tr>
<tr><td colspan="2"><hr /></td></tr>
<tr><td class="formLabel">Donation Type</td><td><select  id="DonationType" name="cmbDonationType">
															<option value="Child">Help a Child</option>
                                                            <option value="Project">Help a Project</option>
                                                            <option value="Fund">Fund Raising</option>
                                                  </select> </td></tr>
<tr><td class="formLabel">Donation Amount</td><td><select  id="DonationAmount" name="cmbDonationAmount" >
															<option value="1">1$</option>
                                                            <option value="5">5$</option>
                                                            <option value="10">10$</option>
                                                  </select> </td></tr>
<tr>
    <td colspan="2" align="center">
        <input type="submit" class="generalBtn" id="Donate" value="Donate"/>
        <input type="reset" class="generalBtn" id="Reset" value="Reset"/></td>
    </tr> 
</table>
</form>
<p>&nbsp;</p>
<p>&nbsp;</p>
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
    <td class="EndData">© 2013 -SAVE US. SAVE US is an organisation dedicated to the development and improvement of health, education and future opportunities of the children of Sri Lanka. Working closely with local organisations, communities and families.SAVE US is proudly Sri Lankan.</td>
  </tr>
  <tr>
    <td class="k2rmTeam"><a href="../html/k2rmTeam.html" class="k2rmTeam" target="_blank" >Designed & Developed by K2RM Solutions</a></td>
  </tr>
</table>
<!-- InstanceEndEditable -->
</body>
<!-- InstanceEnd --></html>
