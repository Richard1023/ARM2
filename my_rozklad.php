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
$id = (int)$_SESSION['id'];

echo '<center><table border="1" cellpadding="5" cellspacing="0" style="width: 120px; height: 200px" align="left">';
echo '<tr>';
echo '<th>Пара</th>';
echo '</tr>';

$query = mysql_query("SELECT rozklad_pon FROM lectors  WHERE id='$id' ");
$array = mysql_fetch_array($query);
$arr_pon = explode(",",$array[0]); 

for($i=1;$i<6;$i++)
{
	$para = $i+1;
    echo '<tr>';
	echo '<td>';
	echo "<big>$i<big>";
    echo '</tr>';
}
echo '</table>';

// Выводим "шапку" таблицы
echo '<table border="1" cellpadding="5" cellspacing="0" style="width: 120px; height: 200px" align="left">';
echo '<tr>';
echo '<th>Понеділок</th>';
echo '</tr>';

$query = mysql_query("SELECT rozklad_pon FROM lectors  WHERE id='$id' ");
$array = mysql_fetch_array($query);
$arr_pon = explode(",",$array[0]); 

for($i=0;$i<5;$i++)
{
	$para = $i+1;
    echo '<tr>';
	echo '<td>';
	echo '<select disabled="disabled" name="pon'.$para.'">';
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
echo '</table>';




echo '<table border="1" cellpadding="5" cellspacing="0" style="width: 120px; height: 200px" align="left">';
echo '<tr>';
echo '<th>Вівторок</th>';
echo '</tr>';

$query = mysql_query("SELECT rozklad_viv FROM lectors  WHERE id='$id' ");
$array = mysql_fetch_array($query);
$arr_viv = explode(",",$array[0]); 

for($i=0;$i<5;$i++)
{
	$para = $i+1;
    echo '<tr>';
	echo '<td>';
	echo '<select disabled="disabled" name="viv'.$para.'">';
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
echo '</table>';






echo '<table border="1" cellpadding="5" cellspacing="0" style="width: 120px; height: 200px" align="left">';
echo '<tr>';
echo '<th>Середа</th>';
echo '</tr>';

$query = mysql_query("SELECT rozklad_ser FROM lectors  WHERE id='$id' ");
$array = mysql_fetch_array($query);
$arr_ser = explode(",",$array[0]); 

for($i=0;$i<5;$i++)
{
	$para = $i+1;
    echo '<tr>';
	echo '<td>';
	echo '<select disabled="disabled" name="ser'.$para.'">';
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
echo '</table>';





echo '<table border="1" cellpadding="5" cellspacing="0" style="width: 120px; height: 200px" align="left">';
echo '<tr>';
echo '<th>Четвер</th>';
echo '</tr>';

$query = mysql_query("SELECT rozklad_chet FROM lectors  WHERE id='$id' ");
$array = mysql_fetch_array($query);
$arr_chet = explode(",",$array[0]); 

for($i=0;$i<5;$i++)
{
	$para = $i+1;
    echo '<tr>';
	echo '<td>';
	echo '<select disabled="disabled" name="chet'.$para.'">';
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
echo '</table>';





echo '<table border="1" cellpadding="5" cellspacing="0" style="width: 120px; height: 200px" align="left">';
echo '<tr>';
echo '<th>П*ятниця</th>';
echo '</tr>';

$query = mysql_query("SELECT rozklad_piat FROM lectors  WHERE id='$id' ");
$array = mysql_fetch_array($query);
$arr_piat = explode(",",$array[0]); 

for($i=0;$i<5;$i++)
{
	$para = $i+1;
    echo '<tr>';
	echo '<td>';
	echo '<select disabled="disabled" name="piat'.$para.'">';
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
echo '</table>';

?>