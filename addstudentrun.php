<?php
$connection = mysql_connect("localhost","root","") or die ("Ошибка");
mysql_select_db('armbd');
session_start();
$imia = htmlspecialchars($_POST['imia']);
$familia = htmlspecialchars($_POST['familia']);
$pobatkovi = htmlspecialchars($_POST['pobatkovi']);
$riknar = htmlspecialchars($_POST['riknar']);
$primitka = htmlspecialchars($_POST['primitka']);
$id = htmlspecialchars($_POST['id']);
$groupname = 'grid'.$id;


$query = "INSERT INTO $groupname (imia, familia, pobatkovi, riknar, notatok) VALUES('$imia','$familia','$pobatkovi','$riknar','$primitka')";
$result = mysql_query($query) or die ("Ошибка".mysql_error());

Header("Location:index.php?stor=students&id=$id#ok_student");
?>