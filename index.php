<?php

/**
 * Simple script to get data from 
 * Google Search Console using Oauth
 *
 * @author Steve Lee
 * @version 0.0.1
 */
//error_reporting(E_ALL);
//ini_set('display_errors', 1);

require_once __DIR__ . '/vendor/autoload.php';

use CooderSteve\Classes\Main;
use Exception;

try {
    $main = new Main();
} catch (Exception $e) {
    echo $e->getMessage();
}
