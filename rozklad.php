<?php

$dblocation = "localhost";   // Имя сервера
$dbuser     = "root";        // Имя пользователя
$dbpswrd    = "";            // Пароль
$dbname     = "armbd";     // Имя базы данных

DEFINE('ITEMS_PER_PAGE', 5);

// Соединение с сервером базы данных
$dblink = mysql_connect( $dblocation, $dbuser, $dbpswrd );
mysql_query( 'SET NAMES UTF-8' );
// Выбираем базу данных
mysql_select_db( $dbname, $dblink );

// Выбираем из БД общее количество записей
$query = "SELECT * FROM lectors";
$res = mysql_query( $query );

//proverjy action
$action = htmlspecialchars($_GET['action']);
$id = (int)$_GET['id'];

if($action == "save" && !empty($id)){
$pon1 = htmlspecialchars($_POST['pon1']);
$pon2 = htmlspecialchars($_POST['pon2']);
$pon3 = htmlspecialchars($_POST['pon3']);
$pon4 = htmlspecialchars($_POST['pon4']);
$pon5 = htmlspecialchars($_POST['pon5']);
$rozklad_pon = $pon1.','.$pon2.','.$pon3.','.$pon4.','.$pon5;
$query = "UPDATE lectors SET rozklad_pon='$rozklad_pon' WHERE id='$id'";
$res = mysql_query( $query );

$viv1 = htmlspecialchars($_POST['viv1']);
$viv2 = htmlspecialchars($_POST['viv2']);
$viv3 = htmlspecialchars($_POST['viv3']);
$viv4 = htmlspecialchars($_POST['viv4']);
$viv5 = htmlspecialchars($_POST['viv5']);
$rozklad_viv = $viv1.','.$viv2.','.$viv3.','.$viv4.','.$viv5;
$query = "UPDATE lectors SET rozklad_viv='$rozklad_viv' WHERE id='$id'";
$res = mysql_query( $query );

$ser1 = htmlspecialchars($_POST['ser1']);
$ser2 = htmlspecialchars($_POST['ser2']);
$ser3 = htmlspecialchars($_POST['ser3']);
$ser4 = htmlspecialchars($_POST['ser4']);
$ser5 = htmlspecialchars($_POST['ser5']);
$rozklad_ser = $ser1.','.$ser2.','.$ser3.','.$ser4.','.$ser5;
$query = "UPDATE lectors SET rozklad_ser='$rozklad_ser' WHERE id='$id'";
$res = mysql_query( $query );

$chet1 = htmlspecialchars($_POST['chet1']);
$chet2 = htmlspecialchars($_POST['chet2']);
$chet3 = htmlspecialchars($_POST['chet3']);
$chet4 = htmlspecialchars($_POST['chet4']);
$chet5 = htmlspecialchars($_POST['chet5']);
$rozklad_chet = $chet1.','.$chet2.','.$chet3.','.$chet4.','.$chet5;
$query = "UPDATE lectors SET rozklad_chet='$rozklad_chet' WHERE id='$id'";
$res = mysql_query( $query );

$piat1 = htmlspecialchars($_POST['piat1']);
$piat2 = htmlspecialchars($_POST['piat2']);
$piat3 = htmlspecialchars($_POST['piat3']);
$piat4 = htmlspecialchars($_POST['piat4']);
$piat5 = htmlspecialchars($_POST['piat5']);
$rozklad_piat = $piat1.','.$piat2.','.$piat3.','.$piat4.','.$piat5;
$query = "UPDATE lectors SET rozklad_piat='$rozklad_piat' WHERE id='$id'";
$res = mysql_query( $query );
}

// Выводим "шапку" таблицы
echo '<form class="add_form" name="rozklad_form" action="?stor=rozklad&action=save&id='.$id.'" method="post">
<center><b>Понеділок</b><br><br><br><table border="1" cellpadding="5" cellspacing="0">';
echo '<tr>';
echo '<th>Пара</th>';
echo '<th>Група</th>';
echo '</tr>';

$query = mysql_query("SELECT rozklad_pon FROM lectors  WHERE id='$id' ");
$array = mysql_fetch_array($query);
$arr_pon = explode(",",$array[0]); 

for($i=0;$i<5;$i++)
{
	$para = $i+1;
    echo '<tr>';
    echo '<td>Пара '.$para.'</td>';
	echo '<td>';
	echo '<select name="pon'.$para.'">';
	?>

    <option value="0">Вікно</option>
<?php
$res = mysql_query('select id, nazva from groups');
while($row = mysql_fetch_assoc($res)){
    ?>
    <option value="<?=$row['id']?>" <?=(($row["id"] == $arr_pon[$i]) ? 'selected' : '')?> ><?=$row['nazva'] ?></option>
    <?php
}
?>
</select></td>
	<?php
    echo '</tr>';
}
echo '</table><br><br>';




echo '<form class="add_form" name="rozklad_form" action="?stor=rozklad&action=save&id='.$id.'" method="post">
<center><b>Вівторок</b><br><br><br><table border="1" cellpadding="5" cellspacing="0">';
echo '<tr>';
echo '<th>Пара</th>';
echo '<th>Група</th>';
echo '</tr>';

$query = mysql_query("SELECT rozklad_viv FROM lectors  WHERE id='$id' ");
$array = mysql_fetch_array($query);
$arr_viv = explode(",",$array[0]); 

for($i=0;$i<5;$i++)
{
	$para = $i+1;
    echo '<tr>';
    echo '<td>Пара '.$para.'</td>';
	echo '<td>';
	echo '<select name="viv'.$para.'">';
	?>

    <option value="0">Вікно</option>
<?php
$res = mysql_query('select id, nazva from groups');
while($row = mysql_fetch_assoc($res)){
    ?>
    <option value="<?=$row['id']?>" <?=(($row["id"] == $arr_viv[$i]) ? 'selected' : '')?> ><?=$row['nazva'] ?></option>
    <?php
}
?>
</select></td>
	<?php
    echo '</tr>';
}
echo '</table><br><br>';






echo '<form class="add_form" name="rozklad_form" action="?stor=rozklad&action=save&id='.$id.'" method="post">
<center><b>Середа</b><br><br><br><table border="1" cellpadding="5" cellspacing="0">';
echo '<tr>';
echo '<th>Пара</th>';
echo '<th>Група</th>';
echo '</tr>';

$query = mysql_query("SELECT rozklad_ser FROM lectors  WHERE id='$id' ");
$array = mysql_fetch_array($query);
$arr_ser = explode(",",$array[0]); 

for($i=0;$i<5;$i++)
{
	$para = $i+1;
    echo '<tr>';
    echo '<td>Пара '.$para.'</td>';
	echo '<td>';
	echo '<select name="ser'.$para.'">';
	?>

    <option value="0">Вікно</option>
<?php
$res = mysql_query('select id, nazva from groups');
while($row = mysql_fetch_assoc($res)){
    ?>
    <option value="<?=$row['id']?>" <?=(($row["id"] == $arr_ser[$i]) ? 'selected' : '')?> ><?=$row['nazva'] ?></option>
    <?php
}
?>
</select></td>
	<?php
    echo '</tr>';
}
echo '</table><br><br>';





echo '<form class="add_form" name="rozklad_form" action="?stor=rozklad&action=save&id='.$id.'" method="post">
<center><b>Четвер</b><br><br><br><table border="1" cellpadding="5" cellspacing="0">';
echo '<tr>';
echo '<th>Пара</th>';
echo '<th>Група</th>';
echo '</tr>';

$query = mysql_query("SELECT rozklad_chet FROM lectors  WHERE id='$id' ");
$array = mysql_fetch_array($query);
$arr_chet = explode(",",$array[0]); 

for($i=0;$i<5;$i++)
{
	$para = $i+1;
    echo '<tr>';
    echo '<td>Пара '.$para.'</td>';
	echo '<td>';
	echo '<select name="chet'.$para.'">';
	?>

    <option value="0">Вікно</option>
<?php
$res = mysql_query('select id, nazva from groups');
while($row = mysql_fetch_assoc($res)){
    ?>
    <option value="<?=$row['id']?>" <?=(($row["id"] == $arr_chet[$i]) ? 'selected' : '')?> ><?=$row['nazva'] ?></option>
    <?php
}
?>
</select></td>
	<?php
    echo '</tr>';
}
echo '</table><br><br>';





echo '<form class="add_form" name="rozklad_form" action="?stor=rozklad&action=save&id='.$id.'" method="post">
<center><b>Пятниця</b><br><br><br><table border="1" cellpadding="5" cellspacing="0">';
echo '<tr>';
echo '<th>Пара</th>';
echo '<th>Група</th>';
echo '</tr>';

$query = mysql_query("SELECT rozklad_piat FROM lectors  WHERE id='$id' ");
$array = mysql_fetch_array($query);
$arr_piat = explode(",",$array[0]); 

for($i=0;$i<5;$i++)
{
	$para = $i+1;
    echo '<tr>';
    echo '<td>Пара '.$para.'</td>';
	echo '<td>';
	echo '<select name="piat'.$para.'">';
	?>

    <option value="0">Вікно</option>
<?php
$res = mysql_query('select id, nazva from groups');
while($row = mysql_fetch_assoc($res)){
    ?>
    <option value="<?=$row['id']?>" <?=(($row["id"] == $arr_piat[$i]) ? 'selected' : '')?> ><?=$row['nazva'] ?></option>
    <?php
}
?>
</select></td>
	<?php
    echo '</tr>';
}
echo '</table><br><br>';








echo '<p><button class="submit" type="submit">Зберегти</button></p></form>';
?>