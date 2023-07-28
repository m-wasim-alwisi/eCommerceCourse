<?php

// Unset The Data
session_unset();
// Destory The Session	
session_destroy();

// delete all cookies of my website in php
if (isset($_SERVER['HTTP_COOKIE'])) {
	$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
	foreach ($cookies as $cookie) {
		$parts = explode('=', $cookie);
		$name = trim($parts[0]);
		setcookie($name, '', time() - 1000);
		setcookie($name, '', time() - 1000, '/');
	}
}
header('Location: ./index.php');

exit();
