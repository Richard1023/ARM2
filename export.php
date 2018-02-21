<?php
 header('Content-Type: application/vnd.ms-excel; charset=utf-8');
 header("Content-Transfer-Encoding: binary ");


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

$query = mysql_query("SELECT tema FROM journal$id_journal WHERE id='$id_urok' ");
$array = mysql_fetch_array($query);
$tema_uroku = $array[0];

$query = mysql_query("SELECT date FROM journal$id_journal WHERE id='$id_urok' ");
$array = mysql_fetch_array($query);
$data_uroku = $array[0];

 header("Content-Disposition: attachment;filename=".$data_uroku."-$tema_uroku.xls");
 
echo '
   <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
   <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
 <head>
 <meta http-equiv="content-type" content="text/html; charset=utf-8" />
 <meta name="author" content="journal" />
 <title>Журнал</title>
 </head>
 <body>
';


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

 
 
echo '
  <table border="1">
 <tr>
 <th>Імя</th>
 <th>Фамілія</th>
 <th>Побатькові</th>
 <th>Оцінка</th>
 </tr>
';


$i = 0;




while($row = mysql_fetch_array($res)){
$i++;
echo '<tr>
 <td>'.$row['imia'].'</td>
 <td>'.$row['familia'].'</td>
 <td>'.$row['pobatkovi'].'</td>
 <td>'.$array_ocenki[$i-1].'</td>
       </tr>';
}
echo '</table>';
echo '</body></html>';
?>