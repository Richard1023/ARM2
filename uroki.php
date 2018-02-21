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
$id_urok = (int)$_GET['id_urok'];

if($action == "del" && !empty($id_urok)){
$query = "DELETE FROM journal$id WHERE id=$id_urok";
$res = mysql_query( $query );
}

// Выбираем из БД общее количество записей
$query = "SELECT * FROM journal$id";
$res = mysql_query( $query );

// Выводим "шапку" таблицы
echo '<table border="1" cellpadding="5" cellspacing="0">';
echo '<tr>';
echo '<th>Дата</th>';
echo '<th>Тема</th>';
echo '<th>Переглянуты</th>';
echo '<th>Видалити</th>';
echo '</tr>';

while( $prd = mysql_fetch_array( $res ) )
{
    echo '<tr>';
    echo '<td>'.$prd['date'].'</td>';
	echo '<td>'.$prd['tema'].'</td>';
    echo '<td><a href=index.php?stor=editurok&id_journal='.$id.'&id_urok='.$prd['id'].'>Переглянути</a></td>';
    echo '<td><a href=index.php?stor=uroki&action=del&id='.$id.'&id_urok='.$prd['id'].'>Видалити</a></td>'; 
    echo '</tr>';
}

echo '</table>';


?>