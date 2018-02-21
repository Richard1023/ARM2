<?php

session_start();

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
$query = "DELETE FROM groups WHERE id=$id";
$res = mysql_query( $query );
$tablename = 'grid'.$id;
$query = "DROP TABLE $tablename";
$res = mysql_query( $query );
}

// Выбираем из БД общее количество записей
$query = "SELECT * FROM groups";
$res = mysql_query( $query );

// Выводим "шапку" таблицы
echo '<table border="1" cellpadding="5" cellspacing="0">';
echo '<tr>';
echo '<th>ID</th>';
echo '<th>Назва</th>';
echo '<th>Додаткова інформація</th>';
echo '<th>Перегляд</th>';
if($_SESSION['login'] == 'dekanat'){echo '<th>Видалення</th>';}
echo '</tr>';

while( $prd = mysql_fetch_array( $res ) )
{
    echo '<tr>';
    echo '<td>'.$prd['id'].'</td>';
    $title_table = mb_substr($prd['nazva'], 0, 15, 'UTF-8') . '';
    echo "<td>$title_table</td>";
	$opisanie = mb_substr($prd['opisanie'], 0, 200, 'UTF-8') . '';
    echo "<td>$opisanie</td>";
    echo '<td><a href=index.php?stor=students&id='.$prd['id'].'>Переглянути</a></td>';
   if($_SESSION['login'] == 'dekanat'){ echo '<td><a href=index.php?stor=groups&action=del&id='.$prd['id'].'>Видалити</a></td>';} 
    echo '</tr>';
}

echo '</table>';

if($_SESSION['login'] == 'dekanat'){
?>
<br>
<center>
<a href = "index.php?stor=addgroup">Додати групу</a>
</center>
<?php }
?>