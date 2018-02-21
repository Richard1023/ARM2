<?php
$dblocation = "localhost";   // Имя сервера
$dbuser     = "root";        // Имя пользователя
$dbpswrd    = "";            // Пароль
$dbname     = "armbd";     // Имя базы данных

// Соединение с сервером базы данных
$dblink = mysql_connect( $dblocation, $dbuser, $dbpswrd );
mysql_query( 'SET NAMES UTF-8' );
// Выбираем базу данных
mysql_select_db( $dbname, $dblink );

$id_urok = (int)$_GET['id_urok'];
$id_journal = (int)$_GET['id_journal'];
?>
		
		<?php

// Выбираем из БД общее количество записей

$query = mysql_query("SELECT id_group FROM journals WHERE id='$id_journal'");
$array = mysql_fetch_array($query);
$groupid_v = $array[0];
$groupid = 'grid'.$groupid_v;
$query = "SELECT * FROM $groupid";
$res = mysql_query( $query );

$query2 = mysql_query("SELECT zapisi FROM journal$id_journal WHERE id='$id_urok'");
$array2 = mysql_fetch_array($query2);
$spisok_ocenki = $array2[0];
$array_ocenki = explode(",", $spisok_ocenki);

// Выводим "шапку" таблицы
echo '<br><br><br>';
echo '<table border="1" cellpadding="5" cellspacing="0">';
echo '<tr>';
echo '<th>Імя</th>';
echo '<th>Фамілія</th>';
echo '<th>Побатькові</th>';
echo '<th>Оцінка</th>';
echo '</tr>';

$i = 0;

while( $prd = mysql_fetch_array( $res ) )
{
	$i++;
    echo '<tr>';
    echo '<td>'.$prd['imia'].'</td>';
    echo '<td>'.$prd['familia'].'</td>';
	echo '<td>'.$prd['pobatkovi'].'</td>';
	echo '<td>'.$array_ocenki[$i-1].'</td>';
    echo '</tr>';
}
echo '</table>';
echo '<input type="text" name="kolvo" style="display:none" value="'.$i.'">';

?>