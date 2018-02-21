<?php
	session_start();
?>
<style>
.text_input {
    border: 0;
    margin: 5px 35px 0 34px;
    padding: 0px 0px 0px 10px;
    width: 150px;
    height: 32px;
    background: url(images/text_input.png) top left no-repeat;
}
</style>
<center>
<p><b>Авторизація</b><br />
    <form action="authorization.php" method="post">

 <p>
    <label>Ваш логін:<br></label>
    <input type="text" class="text_input" name="login" type="text" size="15" maxlength="15">
    </p>

    <p>

    <label>Ваш пароль:<br></label>
    <input type="text" class="text_input" name="password" type="password" size="15" maxlength="15">
    </p>
	<br>
    <p>
 <input type="submit" name="submit" value="Войти">
	

    </p></form>
</center>

<script>
    if(window.location.hash == "#error") {
 	showErrorToast();
    }
</script>