<?php

use Algorithm\Components\Helper;

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

define('ROOT', dirname(__DIR__) . '/');

require ROOT . 'vendor/autoload.php';

var_dump(Helper::randomArray(5));
var_dump(Helper::sortArray(30));
