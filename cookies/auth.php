<?php
  require_once 'config.php';

session_start();

	if(empty($_POST['email']) OR empty($_POST['password']))
	{
		die('Пожалуйста, заполните все поля');
	}


$remember_me = $_POST['remember_me'];
$email = $_POST['email'];
$pass = $_POST['password'];
if ($email == $dbEmail) 
{
	$passHash = md5($pass);
	if ($passHash == $dbPass)
	{

		if(!empty($remember_me)) {
			session_start();
			$_SESSION['pass'] = $passHash;
		}

		$expires = time() + (60*60*24*7);
		setcookie('token', $passHash, $expires, '/');
		die('Добро пожаловать');
	}
	else
	{
		die('Email или пароль введён неверно');
	}
}
else
{
	die('Такого пользователя нет');
}

 ?>