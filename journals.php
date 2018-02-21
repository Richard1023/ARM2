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

//proverjy action
$action = htmlspecialchars($_GET['action']);
$id = (int)$_GET['id'];

if($action == "del" && !empty($id)){
$query = "DELETE FROM journals WHERE id=$id";
$res = mysql_query( $query );
$tablename = 'journal'.$id;
$query = "DROP TABLE $tablename";
$res = mysql_query( $query );
}

$id_lect = (int)$_SESSION['id'];
if($_SESSION['login']=='dekanat'){$query = "SELECT * FROM journals";}else{$query = "SELECT * FROM journals where id_lect = $id_lect";}
$res = mysql_query( $query );

// Выводим "шапку" таблицы
echo '<table border="1" cellpadding="5" cellspacing="0">';
echo '<tr>';
echo '<th>Група</th>';
echo '<th>Предмет</th>';
echo '<th>Вчитель</th>';
echo '<th>Перегляд</th>';
echo '<th>Додаты урок</th>';
echo '<th>Видалення</th>';
echo '</tr>';

while( $prd = mysql_fetch_array( $res ) )
{
    echo '<tr>';
	
	$idgroup = $prd['id_group'];
	$query = mysql_query("SELECT nazva FROM groups WHERE id = '$idgroup'");
	$array = mysql_fetch_array($query);
	$group_vivod = $array[0];
    echo '<td>'.$group_vivod.'</td>';
	
    $title_table = mb_substr($prd['predmet'], 0, 40, 'UTF-8') . '';
    echo "<td>$title_table</td>";
	
	
	
	$idlect = $prd['id_lect'];
	$query = mysql_query("SELECT lect_pib FROM lectors WHERE id = '$idlect'");
	$array = mysql_fetch_array($query);
	$lect_vivod = $array[0];
    echo '<td>'.$lect_vivod.'</td>';

	
	
    echo '<td><a href=index.php?stor=uroki&id='.$prd['id'].'>Переглянути</a></td>';
	echo '<td><a href=index.php?stor=addurok&action=del&id='.$prd['id'].'>Додаты урок</a></td>';
    echo '<td><a href=index.php?stor=journals&action=del&id='.$prd['id'].'>Видалити</a></td>'; 
    echo '</tr>';
}

echo '</table>';


if($_SESSION['login'] == 'dekanat'){
?>
<br>
<center>
<a href = "index.php?stor=addjournal">Додати журнал</a>
</center>
<?php }
?>