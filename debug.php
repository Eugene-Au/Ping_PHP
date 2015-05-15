<?php
    define('DEBUG', true);

    if (DEBUG) {
        error_reporting(E_ALL);
        ini_set('display_errors', 'On');
    } else {
        //if it is not a debug mode we must leave php.ini settings as they are
    }
    
?>