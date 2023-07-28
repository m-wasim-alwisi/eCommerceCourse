<?php
ini_set('session.use_only_cookies', 1);
ini_set('session.use_strickt_mode', 1);

session_set_cookie_params([
    'lifetime' => 1800,
    'domain' => 'localhost',
    'path' => '/',
    'secure' => true,
    'httponly' => true
]);
session_start();

if (!isset($_SESSION['last_session_regenerate'])) {
    session_regenerate_id(true);
    $_SESSION['last_session_regenerate'] = time();
} else {
    $inteval = 60 * 10;
    if (time() - $_SESSION['last_session_regenerate'] >= $inteval) {
        session_regenerate_id(true);
        $_SESSION['last_session_regenerate'] = time();
    }
}
