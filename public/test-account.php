<?php
session_start();
$status = '';
$inputLogin = '';
$inputPassword = '';

function getUser($login) {
    $queryAuth = sprintf('SELECT * FROM users WHERE login = "%s"', $login);
    $mysqli = mysqli_connect('php.base', 'root', '', 'shop');
    $mysqlAuth = mysqli_query($mysqli, $queryAuth);
    $user = NULL;
    $user = mysqli_fetch_assoc($mysqlAuth);
    if (!is_null($user))
	return $user;
	return false;
};
$inputLogin = $_POST['login'];
$inputPassword = $_POST['password'];
$inputHesh = password_hash($inputPassword, PASSWORD_DEFAULT);
$user = getUser($inputLogin);

if (!$user) {
    $status = 'Логин не верный';
} elseif (password_verify($inputPassword, $user['hash'])) {
    
    $_SESSION['login'] = $inputLogin;
    $_SESSION['isAuth'] = true;
    $status = '';
//    die;
//    header("Refresh: 0");
//    header('location: /test-account.php');
    
} else {
    $status .= 'Пароль не верный';
    $_SESSION['isAuth'] = false;
};

if (isset($_POST['logout'])) {
    $_SESSION['isAuth'] = false;
    $status = '';
//	session_start();
//	session_destroy();
//    header("Refresh: 0");
//	header('location: /test-account.php');
//	die();
};
?>    

<meta charset="UTF-8">
<?php if ($status != ''):?>
<h2><?=$status ?></h2>
<?php endif;?>

<?php if (!$_SESSION['isAuth']) :?>
<form method="post" action="#">
    <label for="login">Логин</label>
    <input name="login" type="text"><br/><br/>
    <label for="password">Пароль</label>
    <input name="password" type="password"><br/><br/>
    <label for="remember">Запомнить</label>
    <input name="remember" type="checkbox"><br/><br/>
    <button type="submit" >Войти</button>
</form>
<?php else :?>
<form method="post" action="#">
    <h2>Привет <?=$_SESSION['login']?></h2><br/><br/>
    <button name="logout" type="submit">Выйти</button>
</form>
<?php endif;
//print_r('$_POST["logout"] - ');
//var_dump($_POST['logout']);
//print_r('<br/>status - ');
//var_dump($status);
//print_r('<br/>login  - ');
//var_dump($_SESSION['login'] );
//print_r('<br/>isAuth  - ');
//var_dump($_SESSION['isAuth'] );

?>
    
        


