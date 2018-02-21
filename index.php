<?php session_start(); 
$DB_HOST = "localhost";
$DB_USER = "root";
$DB_PASS = "";
$DB_NAME = "armbd";
mysql_connect($DB_HOST,$DB_USER,$DB_PASS) or die (mysql_error());
mysql_select_db($DB_NAME);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html;charset=iso-8859-2" />
	<link rel="stylesheet" href="style.css" type="text/css" />
        <link type="text/css" href="css/jquery.toastmessage-min.css" rel="stylesheet"/>
        <script type="text/javascript" src="msg.js"></script>
        <script type="text/javascript" src="jquery-1.5.min.js"></script>
        <script type="text/javascript" src="jquery.toastmessage-min.js"></script>
	<title>АРМ викладача</title>
</head>
<body>
<script>
    if(window.location.hash == "#ok_addgroup") {
 	showSuccessToast();
    }
    if(window.location.hash == "#null") {
 	showErrorToastNull();
    }

    if(window.location.hash == "#login") {
 	showErrorToastLogin();
    }

    if(window.location.hash == "#ok_student") {
 	showSuccessToastReg_ok()
    }

    if(window.location.hash == "#reg_bad") {
 	showErrorToastReg_bad();
    }
</script>
	<div id="content">
		<div id="header">
			
			<div id="logo">
				<h1><a href="index.php" title="Centralized Internet Content">АРМ<span class="title"> викладача</span></a></h1>
				<p>online журнал</p>
			</div>
		</div>
					

					
		<div class="gboxtop"></div>
		<div class="gbox">
			<p><center>Автоматизоване робоче місце викладача. Облік відвідування та успішності студентів.</center></p>
		</div><div class="left">
		  
		<?php
$stor = $_GET['stor'];
switch ($stor){

case groups:
include("groups.php");
break;

case addgroup:
include("addgroup.php");
break;

case registration:
include("reg.php");
break;

case admin:
include("admin.php");
break;

case journals:
include("journals.php");
break;

case uroki:
include("uroki.php");
break;

case editurok:
include("editurok.php");
break;

case students:
include("students.php");
break;

case addurok:
include("addurok.php");
break;

case lectors:
include("lectors.php");
break;

case admin_edit:
include("admin_edit.php");
break;

case read_journal:
include("read_journal.php");
break;

case addjournal:
include("addjournal.php");
break;

case addstudent:
include("addstudent.php");
break;

case addlector:
include("addlector.php");
break;

case rozklad:
include("rozklad.php");
break;

case my_rozklad:
include("my_rozklad.php");
break;

default:
include("katalog.php");
break;
}
?>
		</div>
		<div id="right">
			<div class="boxtop"></div>
			<div class="box">
				<?php if (empty($_SESSION['login']) or empty($_SESSION['id'])){ include "login.php"; }else{ include "menu.php"; }?>
				<br /></p>
			</div>
			





			
		</div>	
		<div class="footer">
			<p>Розроблено у 2017</p>
		</div>
	</div>
</body>
</html>