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
$query = "DELETE FROM lectors WHERE id=$id";
$res = mysql_query( $query );
}

$loginsession = $_SESSION['login'];

// Выбираем из БД общее количество записей
if($_SESSION['login'] == 'dekanat'){$query = "SELECT * FROM lectors";}
else{$query = "SELECT * FROM lectors WHERE login = $loginsession";}
$res = mysql_query( $query );

// Выводим "шапку" таблицы
echo '<table border="1" cellpadding="5" cellspacing="0">';
echo '<tr>';
echo '<th>Вчитель</th>';
echo '<th>Предмет</th>';
echo '<th>Розклад</th>';
echo '<th>Видалення</th>';
echo '</tr>';

while( $prd = mysql_fetch_array( $res ) )
{
    echo '<tr>';
    echo '<td>'.$prd['lect_pib'].'</td>';
	echo '<td>'.$prd['lect_urok'].'</td>';
    echo '<td><a href=index.php?stor=rozklad&id='.$prd['id'].'>Переглянути розклад</a></td>';
    echo '<td><a href=index.php?stor=lectors&action=del&id='.$prd['id'].'>Видалити</a></td>'; 
    echo '</tr>';
}

echo '</table>';


?>
<br>
<center>
<a href = "index.php?stor=addlector">Додати вчителя</a>
</center>