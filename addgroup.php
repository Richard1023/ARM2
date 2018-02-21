<form class="add_form" action="addgrouprun.php" method="post" name="contact_form">
    <ul>
        <li>
             <h2>Додавання групи</h2>
             <span class="required_notification">* Обов'язково заповнити</span>
        </li>
        <li>
            <label for="name">Назва групи:</label>
            <input type="text"  placeholder="" name="title" required />
        </li>
        
        <li>
            <label for="message">Додаткова інформація:</label>
            <textarea name="dodatkinfo" cols="40" rows="6" ></textarea>
        </li>
        <li>
        	<button class="submit" type="submit">Додати групу</button>
        </li>
    </ul>
</form>