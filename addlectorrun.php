<?php
$connection = mysql_connect("localhost","root","") or die ("Ошибка");
mysql_select_db('armbd');
session_start();
$pib = htmlspecialchars($_POST['PIB']);
$predmet = htmlspecialchars($_POST['predmet']);
$login = htmlspecialchars($_POST['login']);
$password = htmlspecialchars($_POST['password']);


$query = "INSERT INTO lectors (id, lect_pib, lect_urok, login, password) VALUES('','$pib','$predmet','$login','$password')";
$result = mysql_query($query) or die ("Ошибка".mysql_error());

Header("Location:index.php?stor=lectors");
?>