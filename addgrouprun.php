<?php
$connection = mysql_connect("localhost","root","") or die ("Ошибка");
mysql_select_db('armbd');
session_start();
$title = htmlspecialchars($_POST['title']);
$info = htmlspecialchars($_POST['dodatkinfo']);


$query = "INSERT INTO groups (nazva,opisanie) VALUES('$title','$info')";
$result = mysql_query($query) or die ("Ошибка".mysql_error());

$query = mysql_query("SELECT id FROM groups WHERE nazva='$title' ");
$array = mysql_fetch_array($query);
$groupbd = 'grid'.$array[0];

$query = "create table $groupbd (
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
imia varchar(255) NOT NULL,
familia varchar(255) NOT NULL,
pobatkovi varchar(255) NOT NULL,
riknar int,
notatok varchar(255))";
$result = mysql_query($query) or die ("Ошибка".mysql_error());
Header("Location:index.php?stor=groups#ok_addgroup");
?>