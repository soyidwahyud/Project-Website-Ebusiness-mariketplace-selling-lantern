<?php
	session_start();
	session_destroy();
	session_unset();

	unset($_COOKIE['login']);
	setcookie('login',null);
	header("location:login.php");
	exit;
?>