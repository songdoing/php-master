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
register_shutdown_function(function(){
    if(array_key_exists('DB_CONNECTION', $GLOBALS) && $GLOBALS['DB_CONNECTION']) {
        mysqli_close($GLOBALS['DB_CONNECTION']);
    }
});

ini_set('session.gc_maxlifetime', 1440);
session_get_cookie_params(1440);

session_start;

