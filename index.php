<?php

/**
 * Simple script to get data from 
 * Google Search Console using Oauth
 *
 * @author Steve Lee
 * @version 0.0.4
 */
// /error_reporting(E_ERROR | E_WARNING | E_PARSE);
error_reporting(E_ALL);
ini_set("error_log", __DIR__ . "/php-error.log");
//ini_set('display_errors', 1);

require_once __DIR__ . '/vendor/autoload.php';

use CooderSteve\Classes\Main;
use Exception;

try {
    $Main = print_r((new Main())->getDbTable()->fetchAll());
    
} catch (TypeError $e) {
    echo $e->getMessage();
} catch (Exception $e) {
    echo $e->getMessage();
}
