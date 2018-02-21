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
$id_stud = (int)$_GET['id_stud'];

if($action == "del" && !empty($id_stud)){
$tablename = 'grid'.$id;
$query = "DELETE FROM $tablename WHERE id=$id_stud";
$res = mysql_query( $query );
}

// Выбираем из БД общее количество записей
$groupid = 'grid'.$id;
$query = "SELECT * FROM $groupid";
$res = mysql_query( $query );

// Выводим "шапку" таблицы
echo '<table border="1" cellpadding="5" cellspacing="0">';
echo '<tr>';
echo '<th>Імя</th>';
echo '<th>Фамілія</th>';
echo '<th>Побатькові</th>';
echo '<th>Рік народження</th>';
echo '<th>Примітка</th>';
if($_SESSION['login'] == 'dekanat'){echo '<th>Редагування</th>';}
if($_SESSION['login'] == 'dekanat'){echo '<th>Видалення</th>';}
echo '</tr>';

while( $prd = mysql_fetch_array( $res ) )
{
    echo '<tr>';
    echo '<td>'.$prd['imia'].'</td>';
    echo '<td>'.$prd['familia'].'</td>';
	echo '<td>'.$prd['pobatkovi'].'</td>';
	echo '<td>'.$prd['riknar'].'</td>';
	echo '<td>'.$prd['notatok'].'</td>';
    if($_SESSION['login'] == 'dekanat'){echo '<td><a href=index.php?stor=admin_edit&action=edit&id_stud='.$prd['id'].'&id='.$id.'>Редагувати</a></td>';}
    if($_SESSION['login'] == 'dekanat'){echo '<td><a href=index.php?stor=students&action=del&id_stud='.$prd['id'].'&id='.$id.'>Видалити</a></td>'; }
    echo '</tr>';
}

echo '</table>';

echo '<br><center>';
if($_SESSION['login'] == 'dekanat'){echo '<a href = "index.php?stor=addstudent&id='.$id.'">Додати студента</a>';}
echo '</center>';

?>