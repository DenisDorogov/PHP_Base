<form method="post" action="#">
    <label for="login">Логин</label>
    <input name="login" type="text"><br/>
    <label for="password">Пароль</label>
    <input name="password" type="password"><br/>
    <label for="remember">Запомнить</label>
    <input name="remember" type="checkbox"><br/>
    <button type="submit" >Войти</button>
</form>
<?php
    session_start();
    $_SESSION['login'] = $login;

?>
