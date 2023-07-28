<?php

require('ErrorReport.php');

require('admin/connect.php');
require('includes/functions/session.php');

$sessionUser = '';

if (isset($_SESSION['user'])) {
	$sessionUser = $_SESSION['user'];
}

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
