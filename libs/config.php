<?php
// Initialize session.
session_start();

$_SESSION['users'] = [
    [
        'id' => 1,
        'username' => 'Bin Emmanuel'
    ],
    [
        'id' => 2,
        'username' => 'John Doe'
    ]
];

// Incude our functions.
require 'functions.php';

/**
 * MySQL Setting - You can get this info from your web host.
 */
// The database name.
define('DB_NAME', 'like-system');

// The database user.
define('DB_USERNAME', 'binemmanuel');

// The database password.
define('DB_PASSWORD', 'SMARTlogin89');

// The host name.
define('DB_HOST', 'localhost');

/**
 * For developer: Debugging mode.
 * 
 * Configure error reporting options. 
 * Change this to false to enable display of notices during development.
 */
define('IS_ENV_PRODUCTION', false);

// Turn on error reporting.
error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', IS_ENV_PRODUCTION);

// Set timezone to use date/time functions without warning.
date_default_timezone_set('Africa/Lagos'); // https://www.php.net/manual/en/timezone.php

// Create an error log file.
ini_set('error_log', 'log/php-error.txt');

