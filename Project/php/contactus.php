<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/tmpMain.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>::|Contact Us|::</title>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<!--IMPORTING STYLESHEETS-->

<link href="../css/styles1.css" type="text/css" rel="stylesheet"/>
<link href="../css/buttons.css" type="text/css" rel="stylesheet"/>

<!--IMPORTING JAVESCRIPTS-->  

<script src="../js/userCommentsForm.js" type="text/javascript" language="javascript"></script>

<!--CODE RELATED TO GOOGLE MAP-->

<style>
      #map_canvas {
        width: 500px;
        height: 400px;
      } </style>
<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script>
      function initialize() {
        var map_canvas = document.getElementById('map_canvas');
        var map_options = {
          center: new google.maps.LatLng(6.053947, 80.208575),
          zoom: 16,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(map_canvas, map_options)
	  }
      google.maps.event.addDomListener(window, 'load', initialize);
</script>

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

<!--CONTENT DESIGN-->

<table class="tableContact" align="center" cellspacing="10px">
    <tr>
        <td id="map_canvas" rowspan="10"></td>
        <td class="tableContactHeading">PO BOX</td>
    </tr>
    <tr><td>"SAVE US Fund",</td></tr>
    <tr><td>Sri Hemananda Mawatha,</td></tr>
    <tr><td>Galle,</td></tr>
    <tr><td>Sri Lanka </td></tr>
    <tr><td class="tableContactHeading">TELEPHONE </td></tr>
    <tr><td>+94 91 2200000 </td></tr>
    <tr><td>+94 91 770000000 </td></tr>
    <tr><td class="tableContactHeading">E-MAIL </td></tr>
    <tr><td>saveus@gmail.com </td></tr>
</table>
<hr width="960px" align="center" />

<!--USER FEEDBACK FORM-->

<form id="ContactUs" name="formContactUs" method="post" action="../php/contactMessage.php"  onsubmit="return validateForm()">
<table class="tableContactMessage" align="center">
    <tr><td colspan="2" class="tableContactMessageHeading" align="center">Your Comments</td></tr>
    <tr><td width="319" align="right">Name</td><td width="629"><input type="text" id="Name" name="txtName" size="70" /></td></tr>
    <tr><td align="right">E-mail</td><td><input type="text" id="Email" name="txtEmail" size="70" /></td></tr>
    <tr><td align="right">Phone Number</td><td><input type="text" id="Phone" name="txtPhone" size="70" /></td></tr>
    <tr><td colspan="2" align="center">(Maximum 300 Characters)</td></tr>
    <tr><td align="right">Message</td><td><textarea id="Message" name="txtMessage" cols="54" rows="5"></textarea></td></tr>
    <tr><td colspan="2" align="center"><input type="submit" id="submit" name="btnSubmit" value="Submit" class="generalBtn" /></td></tr>
</table>
</form>

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
