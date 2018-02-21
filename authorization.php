<?php
    session_start();
if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} }
    if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
if (empty($login) or empty($password))
    {
    exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
    }
    $login = stripslashes($login);
    $login = htmlspecialchars($login);
$password = stripslashes($password);
    $password = htmlspecialchars($password);

    $login = trim($login);
    $password = trim($password);

        $DB_HOST = "localhost";
    $DB_USER = "root";
    $DB_PASS = "";
    $DB_NAME = "armbd";
        mysql_connect($DB_HOST,$DB_USER,$DB_PASS) or die (mysql_error());
        mysql_select_db($DB_NAME);
 
$result = mysql_query("SELECT * FROM lectors WHERE login='$login'",mysql_connect($DB_HOST,$DB_USER,$DB_PASS));
    $myrow = mysql_fetch_array($result);
    if (empty($myrow['password']))
    {

    exit (Header("Location:index.php#error"));
    }
    else {
 
    if ($myrow['password']==$password) {
    
    $_SESSION['login']=$myrow['login']; 
    $_SESSION['id']=$myrow['id'];
    Header("Location:index.php");
    }
 else {


    exit (Header("Location:index.php#error"));
    }
    }
    ?>