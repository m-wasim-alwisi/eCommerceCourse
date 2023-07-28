<?php

require 'connect.php';
require ('../includes/functions/session.php');

// Routes

$tpl 	= 'includes/templates/'; // Template Directory
$lang 	= 'includes/languages/'; // Language Directory
$func	= 'includes/functions/'; // Functions Directory
$css 	= 'layout/css/'; // Css Directory
$js 	= 'layout/js/'; // Js Directory

// Include The Important Files

require $func . 'functions.php';
require $lang . 'english.php';
require $tpl . 'header.php';

// Include Navbar On All Pages Expect The One With $noNavbar Vairable

if (!isset($noNavbar)) {
	require $tpl . 'navbar.php';
}
