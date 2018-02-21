<form class="add_form" action="addstudentrun.php" method="post" name="contact_form">
    <ul>
        <li>
             <h2>Додавання студенту до групи</h2>
             <span class="required_notification">* Обов'язково заповнити</span>
        </li>
        <li>
            <label for="name">Імя:</label>
            <input type="text"  placeholder="" name="imia" required />
        </li>
        
		        <li>
            <label for="name">Фамілія:</label>
            <input type="text"  placeholder="" name="familia" required />
        </li>
		
		        <li>
            <label for="name">Побатькові:</label>
            <input type="text"  placeholder="" name="pobatkovi" required />
        </li>
		
		        <li>
            <label for="name">Рік народження:</label>
            <input type="text"  placeholder="" name="riknar" required />
        </li>
		
        <li>
            <label for="message">Примітка:</label>
            <textarea name="primitka" cols="40" rows="6" ></textarea>
        </li>
		
		<?php
		$id = (int)$_GET['id'];
		echo '<input type="text" name="id" value="'.$id.'" style="display:none" />';
		?>
		
        <li>
        	<button class="submit" type="submit">Додати студента</button>
        </li>
    </ul>
</form>