<form class="add_form" action="addlectorrun.php" method="post" name="contact_form">
    <ul>
        <li>
             <h2>Додавання вчителя</h2>
             <span class="required_notification">* Обов'язково заповнити</span>
        </li>
        <li>
            <label for="name">П.І.Б:</label>
            <input type="text"  placeholder="" name="PIB" required />
        </li>
        
        <li>
            <label for="name">Предмет:</label>
            <input type="text"  placeholder="" name="predmet" required />
        </li>
		
		        <li>
            <label for="name">Логін:</label>
            <input type="text"  placeholder="" name="login" required />
        </li>
		
		        <li>
            <label for="name">Пароль:</label>
            <input type="text"  placeholder="" name="password" required />
        </li>
		
        <li>
        	<button class="submit" type="submit">Додати вчителя</button>
        </li>
    </ul>
</form>