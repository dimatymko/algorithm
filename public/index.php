<?php

use Algorithm\Components\Helper;
use Algorithm\Sort;

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

define('ROOT', dirname(__DIR__) . '/');

require ROOT . 'vendor/autoload.php';

$result['bogo_sort'] = Sort::bogo(Helper::randomArray(7));
var_dump($result);
