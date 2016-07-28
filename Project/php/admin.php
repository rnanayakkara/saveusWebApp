<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>::|SAVEUS - ADMINISTRATOR|::</title>

<!--IMPORTING STYLESHEETS-->

<link href="../css/admin.css" type="text/css" rel="stylesheet"/>
<link href="../css/buttons.css" type="text/css" rel="stylesheet"/>

<!--IMPORTING JAVESCRIPTS-->

<script src="../js/adminFunctions1.js" type="text/javascript" language="javascript"></script>

</head>
<body>
<?php
error_reporting(0);
session_start();

/*CHECK WHETHER THE ADMIN IS LOGGED IN*/

if(isset($_SESSION['userType'])){
echo"
<table class='reportHeading' align='center'>
	<tr><td rowspan='4'><img src='../images/Logo.png' width='250px' height='90px'/></td>
		<td align='right'> <a href='../php/viewMessages.php'><img src='../images/messageicon.png' width='35' height='35'/></a></td>
    </tr>
	<tr><td  align='right' >
	<a href='../php/viewMembers.php' class='membersLink'>Total No.of Registered Members :";
		
	/*IMPORTING DATABASE CONNECTION FILE*/
	
    include("dbconfig.php");
    
    /*RECEIVING THE NUMBER OF USERS FROM DATABASE*/
    
    $tbl_name="tblusers";
    $sql="SELECT COUNT(EmailAddress) AS amount_sum FROM $tbl_name WHERE Type=('User')";
    $result=mysql_query($sql);
    $row=mysql_fetch_assoc($result);
    $sum =$row['amount_sum'];
    echo $sum;
    echo"
    </a>
    </td></tr>
    <tr><td  align='right' >Total Amount of Donations :";
    
    /*RECEIVING THE SUM OF DONATIONS FROM DATABASE*/
    
    $tbl_name="tbldonations";
    $sql="SELECT SUM(Amount) AS amount_sum FROM $tbl_name";
    $result=mysql_query($sql);
    $row=mysql_fetch_assoc($result);
    $sum =$row['amount_sum'];
    echo "$".$sum;
    echo"
	</td></tr>
	<tr><td align='right'>
		<input type='submit' name='btnSubmit' value='Admins' class='adminBtn' onclick='gotoPage()' align='texttop'/>
		<input type='submit' name='btnLogout' value='Logout' class='adminBtn' onclick='adminLogout()' align='texttop'/>
	</td></tr>
</table>";

/*DESIGN OF THE ADMIN PANEL*/

echo"
<table class='tblHead' align='center'>
	<tr><td >SAVEUS.COM - ADMIN PANEL</td></tr>
</table>
<table align='center'>
	<tr>
    	<td class='tblOptions'><p class='tblOptionsHead'>REPORTS</p><p><a href='donationsReport.php' >Donations Report</a></p></td>
   		<td class='tblOptions'><p class='tblOptionsHead'>NEWS &amp; PROJECTS</p>
     							 <p><a href='../php/updateNews.php' >Update News on Projects</a></p>
                                 <p><a href='../php/addNewProject.php' >Add New Project</a></p>
                                 <p><a href = '../php/updateProject.php'>Update / Remove Project</a></p></td>
	</tr>
	<tr>
  		<td class='tblOptions'><p class='tblOptionsHead'>CHILDREN</p>
        						<p><a href='../php/addNewChild.php'>Add New Child</a></p>
                                <p><a href='updateChild.php'>Update / Remove a Child Details</a></p>
    	<td class='tblOptions'><p class='tblOptionsHead'>PAGES</p>
     							<p><a href='../index.php' target='_blank'>View Site Pages</a></p>
        </td>
	</tr>
</table>";
}

/*IF NOT LOGGED, REDIRECTING TO THE LOGIN FORM*/

else{
	header( 'Location: ../php/userloginform.php' );	
}
?>
</body>
</html>
