<?php
// Error Reporting

// ini_set('display_errors', 'on');
error_reporting(E_ALL);

// Toggle this to change the setting
define('DEBUG', true);

// You want all errors to be triggered

if (DEBUG == true) {
    // You're developing, so you want all errors to be shown
    // display_errors(true);
    ini_set('display_errors', 'on');
    // Logging is usually overkill during development
    // log_errors(false);
    ini_set('log_errors', 'on');

    ini_set('error_reporting', 'on');
} else {
    // You don't want to display errors on a production environment
    // display_errors(false);
    ini_set('display_errors', 'off');
    // You definitely want to log any occurring
    // log_errors(true);
    ini_set('log_errors', 'on');
    ini_set('error_reporting', 'on');
}
