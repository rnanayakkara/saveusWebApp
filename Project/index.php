<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/tmpMain.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>::|SAVE US|::</title>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<!--IMPORTING STYLESHEETS-->

<link href="css/styles1.css" type="text/css" rel="stylesheet"/>
<link href="css/buttons.css" type="text/css" rel="stylesheet"/>

<!-- Start WOWSlider.com HEAD section -->
<link rel="stylesheet" type="text/css" href="engine1/style.css" />
<script type="text/javascript" src="engine1/jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->

<!-- InstanceEndEditable -->
<!-- InstanceParam name="OptionalRegion1" type="boolean" value="true" -->
<!-- InstanceParam name="OptionalRegion2" type="boolean" value="true" -->
</head>

<body>
<!-- InstanceBeginEditable name="EditRegion4" -->
<?php session_start();
error_reporting(0);

/*CHECK WHETHER THE USER IS ALREADY LOGGED IN AND SESSION VARIBLES ARE SET*/

if (isset($_SESSION['userFName'])){

echo "
<table class=tableHead align=center>
	<tr>
		<td><img src=images/Logo.png width=250px height=90px/></td>
		<td class=register>HI <a class='k2rmTeam' href=php/userProfile.php target=_self>";
		echo $_SESSION['userFName'];
		echo"</a></td>
		<td><a href=php/userLogout.php target=_self>Logout</td>
	</tr>
</table>";
}
else{
echo "
<table class=tableHead align=center>
	<tr>
		<td><img src=images/Logo.png width=250px height=90px/></td>
		<td class=register><a href=php/userregistrationform.php target=_self>Register</a></td>
		<td><a  href=php/userloginform.php target=_self>Login</td>
	</tr>
</table>";

}
?>
<!-- InstanceEndEditable -->
<!--HEADER DESIGN-->
<table class="tableNavigate" align="center">
<tr>
  <td class="NavigateData"><a href="index.php" target="_self">HOME</a></td>
  <td class="NavigateData"><a href="php/meetchildren.php" target="_self">MEET CHILDREN</a></td>
  <td class="NavigateData"><a href="php/helpprojects.php" target="_self">HELP PROJECTS</a></td>
  <td class="NavigateData"><a href="php/contactus.php" target="_self">CONTACT US</a></td>
  <td ><a href="php/donate.php" target="_self"><input type="button" value="Donate" class="donateLinkBtn" /></a></td>
</tr>
</table>

<!-- InstanceBeginEditable name="EditRegion3" -->
<!-- Start WOWSlider.com BODY section -->
<div id="wowslider-container1">
<div class="ws_images"><ul>
<li><img src="data1/images/1487.jpg" alt="SAVE US" title="SAVE US" id="wows1_0"/></li>
<li><img src="data1/images/6150358515_3521f2ea7b_b.jpg" alt="CHILDREN'S FUND" title="CHILDREN'S FUND" id="wows1_1"/></li>
<li><img src="data1/images/boy3.jpg" alt="ONE CHILD AT A TIME" title="ONE CHILD AT A TIME" id="wows1_2"/></li>
<li><img src="data1/images/dsc_87651.jpg" alt="SAVE US" title="SAVE US" id="wows1_3"/></li>
<li><img src="data1/images/rwanda__august_2009_262.jpg" alt="ONE CHILD AT A TIME" title="ONE CHILD AT A TIME" id="wows1_4"/></li>
</ul></div>
<div class="ws_thumbs">
<div>
<a href="#" title="SAVE US"><img src="data1/tooltips/1487.jpg" alt="" /></a>
<a href="#" title="CHILDREN'S FUND"><img src="data1/tooltips/6150358515_3521f2ea7b_b.jpg" alt="" /></a>
<a href="#" title="ONE CHILD AT A TIME"><img src="data1/tooltips/boy3.jpg" alt="" /></a>
<a href="#" title="SAVE US"><img src="data1/tooltips/dsc_87651.jpg" alt="" /></a>
<a href="#" title="ONE CHILD AT A TIME"><img src="data1/tooltips/rwanda__august_2009_262.jpg" alt="" /></a>
</div>
</div>
<span class="wsl"><a href="http://wowslider.com">Slideshow Builder</a> by WOWSlider.com v4.4</span>
	<div class="ws_shadow"></div>
	</div>
	<p>
	  <script type="text/javascript" src="engine1/wowslider.js"></script>
	  <script type="text/javascript" src="engine1/script.js"></script>
	</p>
<!-- End WOWSlider.com BODY section -->

<!--CONTNT DESIGN-->

<table class="tableMainLinks" align="center">
<tr>
    <td class="MainLinksData">Sponsor A Child
    	<p class="MainLinksParagraph"><a href="php/meetchildren.php" class="MainLinksParagraph">Help empower a child to become an independent adult.</a></p>
    </td>
    <td class="MainLinksData">Support A Project
    	<p class="MainLinksParagraph"><a href="php/helpprojects.php" class="MainLinksParagraph">Projects that improve health, education and the ability to find future employment.</a></p>
    </td>
    <td class="MainLinksData">Other Ways To Help
    	<p class="MainLinksParagraph"><a href="php/donate.php" class="MainLinksParagraph">Fundraising, Bequests, Volunteering...There are so many ways to help.</a></p></td>
    </tr>
</table>

<table class="tableAboutUs" align="center" cellspacing="15">
<tr><td class="AboutUsData">What Is Save Us?<p class="AboutUsParagraph">There are 5400 orphans in Sri Lanka. SAVE US focuses on a smaller number: one child at a time. Our unique model emphasises children as individuals regardless of race, religion or physical or mental challenges.	 Our children are kept within their community and they are loved, counseled and encouraged.</p></td><td class="AboutUsData">How We Are Different?<p class="AboutUsParagraph">We work with local government and communities to keep children not only within that community but within a family home.We work with each child individually to help them develop their full potential and prepare them for independent adulthood. Our children will start their adult life with either a vocation or a degree, equipped with years of nurturing and training in life's necessary skills.</p></td></tr>
</table>

<!--NEWS TABLE DESIGN - IMPORTING NEWS FROM THE DATABASE-->

<?php
echo"
<table class='tableNewsHead' align='center'>
	<tr>
		<td align='center'>Latest News</td>
	</tr>
</table>";

/*IMPORTING DATABASE CONNECTION FILE*/
	
    include("php/dbconfig.php");
    
    /*RECEIVING NEWS FROM DATABASE*/
    
    $tbl_name="tblnews";
    $sql="SELECT * FROM $tbl_name";
    $result=mysql_query($sql);

/*DISPLAYING NEWS*/

echo "<table class=tableNews align=center>";

while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td class=NewsHead>" . $row['NewsHeading'] . "</td>";
  echo "<td class=NewsData >" . $row['NewsDetail'] . "</td>";
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
    <td class="FollowUsImages"><img class="FollowUsImages" src="images/facebook.gif" title="Facebook" align="left"/></td>
    <td class="FollowUsImages"><img class="FollowUsImages" src="images/twitter.png" title="Twitter" align="left"/></td>
    <td><img class="FollowUsImages" src="images/youtube.png" title="YouTube" align="left"/></td>
  </tr>
</table>
<hr width="960px" align="center" />
<table class="tableNavigate" align="center">
  <tr>
    <td class="NavigateData"><a href="index.php" target="_self">HOME</a></td>
    <td class="NavigateData"><a href="php/meetchildren.php" target="_self">MEET CHILDREN</a></td>
    <td class="NavigateData"><a href="php/helpprojects.php" target="_self">HELP PROJECTS</a></td>
    <td class="NavigateData"><a href="php/contactus.php" target="_self">CONTACT US</a></td>
    <td class="NavigateData"><a href="php/donate.php" target="_self">DONATE</a></td>
  </tr>
</table>
<table class="tableEnd" align="center">
  <tr>
    <td class="EndData">© 2015 -SAVE US. SAVE US is an organisation dedicated to the development and improvement of health, education and future opportunities of the children of Sri Lanka. Working closely with local organisations, communities and families.SAVE US is proudly Sri Lankan.</td>
  </tr>
  <tr>
    <td class="k2rmTeam"><a href="html/k2rmTeam.html" class="k2rmTeam" target="_blank" >Designed & Developed by K2RM Solutions</a></td>
  </tr>
</table>
<!-- InstanceEndEditable -->
</body>
<!-- InstanceEnd --></html>
