<?php
$connection = mysql_connect("localhost","root","") or die ("Ошибка");
mysql_select_db('armbd');
session_start();
$tema = htmlspecialchars($_POST['tema']);
$date = htmlspecialchars($_POST['date']);
$tipuroka = htmlspecialchars($_POST['tipuroka']);
$id = (int)$_GET['id'];


$kolvo = htmlspecialchars($_POST['kolvo']);
$ocinku = array();
for($i=$kolvo;$i>0;$i--){
$ocinka = htmlspecialchars($_POST["ocinka$i"]);
array_push($ocinku, $ocinka);
}

$ocinku_reverse = array_reverse($ocinku);

$ocinku_bd = implode(",", $ocinku_reverse);

$query = "INSERT INTO journal$id (id, date, tema, zapisi, tipuroka) VALUES('','$date','$tema','$ocinku_bd','$tipuroka')";
$result = mysql_query($query) or die ("Ошибка".mysql_error());

Header("Location:index.php?stor=uroki&id=$id");
?>