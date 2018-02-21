<?php
$id = (int)$_GET['id'];
?>

<form class="add_form" action="addurokrun.php?id=<?php echo $id; ?>" method="post" name="contact_form">
    <ul>
        <li>
             <h2>Додати урок</h2>
             <span class="required_notification">* Обов'язково заповнити</span>
        </li>
        <li>
            <label for="name">Тема уроку:</label>
            <input type="text"  placeholder="" name="tema" required />
        </li>
		
		<li>
            <label for="name">Тип уроку:</label>
            <select name="tipuroka">
			<option value="Лекція">Лекція</option>
			<option value="Лабораторна">Лабораторна</option>
			</select>
        </li>
        
        <li>
            <label for="name">Дата проведення:</label>
			<?php
echo "<input type='date'  placeholder='' name='date' value='" . date("Y-m-d") . "' required />";
?>
        </li>
		
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

$query = mysql_query("SELECT id_group FROM journals WHERE id='$id' ");
$array = mysql_fetch_array($query);
$groupid_v = $array[0];

$groupid = 'grid'.$groupid_v;
$query = "SELECT * FROM $groupid";
$res = mysql_query( $query );

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
	echo '<td><select name="ocinka'.$i.'">
	<option value="-">-</option>
	<option value="н">н</option>
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	</select></td>';
    echo '</tr>';
}

echo '</table>';
echo '<input type="text" name="kolvo" style="display:none" value="'.$i.'">';

?>
		
        <li>
        	<button class="submit" type="submit">Додати урок</button>
        </li>
    </ul>
</form>