<?php

/**
 * Error handling  
 */
ini_set("display_errors", "off");

/**
 * Database connection
 */

$GLOBALS['DB_CONNECTION'] = mysqli_connect (
    'localhost',
    'root',
    'root',
    'phpblog'
);


ini_set('session.gc_maxlifetime', 1440);
session_get_cookie_params(1440);

session_start;

