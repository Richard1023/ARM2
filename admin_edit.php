<?php
include "config.php";
$id = (int)$_GET['id'];
$id_stud = (int)$_GET['id_stud'];
$tablename = 'grid'.$id;
$action = htmlspecialchars($_GET['action']);
if($action == "save" && !empty($id_stud)){
	$imia = htmlspecialchars($_POST['imia']);
	$familia = htmlspecialchars($_POST['familia']);
	$pobatkovi = htmlspecialchars($_POST['pobatkovi']);
	$riknar = htmlspecialchars($_POST['riknar']);
	$notatok = htmlspecialchars($_POST['notatok']);
$querysave = "UPDATE $tablename SET imia='$imia', familia='$familia', pobatkovi='$pobatkovi', riknar='$riknar', notatok='$notatok' WHERE id='$id_stud'";
$ressave = mysql_query( $querysave );
Header("Location:index.php?stor=students&id=$id#save_ok");
}

$query = "SELECT id, imia, familia, pobatkovi, riknar, notatok FROM $tablename WHERE id=$id_stud";
$res = mysql_query( $query );
$prd = mysql_fetch_array($res);

echo '<script>if(window.location.hash == "#save_ok") {showSuccessToastResave();}</script>';
echo '<form class="add_form" name="contact_form" action="?stor=admin_edit&action=save&id_stud='.$prd['id'].'&id='.$id.'#save_ok" method="post"><ul><li><h2>Редагування студенту</h2><span class="required_notification">* Обов*язково заповнити</span></li>';
echo '<li><label for="name">Імя:</label><input type="text" name="imia" value="'.$prd['imia'].'" required /></li>';
echo '<li><label for="name">Фамілія:</label><input type="text" name="familia" value="'.$prd['familia'].'" required /></li>';
echo '<li><label for="website">Побатькові:</label><input type="text" name="pobatkovi" value="'.$prd['pobatkovi'].'" required/></li>';
echo '<li><label for="website">Рік народження:</label><input type="text" name="riknar" value="'.$prd['riknar'].'" required/></li>';
echo '<li><label for="message">Примітка:</label><textarea name="notatok" cols="40" rows="6" required >'.$prd['notatok'].'</textarea></li>';
echo '<p><button class="submit" type="submit">Зберегти</button></p>';
echo '</ul></form>';
?>