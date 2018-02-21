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

?>

<form class="add_form" action="addjournalrun.php" method="post" name="contact_form">
    <ul>
        <li>
             <h2>Створення журналу</h2>
             <span class="required_notification">* Обов'язково заповнити</span>
        </li>
        <li>
            <label for="name">Назва предмету:</label>
            <input type="text"  placeholder="" name="predmet" required />
        </li>
        
		
		
        <li>
            <label for="name">Група:</label>
			
			
			<select name="group">
			<?php
$res = mysql_query('select id, nazva from groups');
while($row = mysql_fetch_assoc($res)){
    ?>
    <option value="<?=$row['id']?>" <?=(($row["id"] == $arr_viv[$i]) ? 'selected' : '')?> ><?=$row['nazva'] ?></option>
    <?php
}
?>
</select>
        </li>
		
		
		
		        <li>
            <label for="name">Вчитель:</label>
            			<select name="lector">
			<?php
$res = mysql_query('select id, lect_pib from lectors');
while($row = mysql_fetch_assoc($res)){
    ?>
    <option value="<?=$row['id']?>" <?=(($row["id"] == $arr_viv[$i]) ? 'selected' : '')?> ><?=$row['lect_pib'] ?></option>
    <?php
}
?>
</select>
        </li>
		
		
        <li>
        	<button class="submit" type="submit">Додати журнал</button>
        </li>
    </ul>
</form>