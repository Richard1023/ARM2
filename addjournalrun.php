<?php
$connection = mysql_connect("localhost","root","") or die ("Ошибка");
mysql_select_db('armbd');
session_start();
$predmet = htmlspecialchars($_POST['predmet']);
$group = htmlspecialchars($_POST['group']);
$lector = htmlspecialchars($_POST['lector']);

$query = "INSERT INTO journals (predmet,id_group,id_lect) VALUES('$predmet','$group','$lector')";
$result = mysql_query($query) or die ("Ошибка".mysql_error());

$query = mysql_query("SELECT max(id) FROM journals WHERE id_group='$group' and id_lect='$lector'");
$array = mysql_fetch_array($query);
$journalbd = 'journal'.$array[0];

$query = "create table $journalbd (
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
date date NOT NULL,
tema varchar(255),
zapisi varchar(800),
tipuroka varchar(20))";
$result = mysql_query($query) or die ("Ошибка".mysql_error());
Header("Location:index.php?stor=journals");
?>