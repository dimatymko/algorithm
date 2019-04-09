<?php

use Algorithm\Components\Helper;
use Algorithm\Search;
use Algorithm\Sort;

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

define('ROOT', dirname(__DIR__) . '/');

require ROOT . 'vendor/autoload.php';

$graph ['friends'] = [
    'you' => ['dima', 'yana', 'nikita', 'sasha'],
    'dima' => ['you', 'fedy'],
    'yana' => ['you', 'vika', 'kristina'],
    'nikita' => ['you', 'any', 'sasha'],
    'sasha' => ['you', 'nikita', 'koly'],
    'fedy' => [],
    'vika' => [],
    'any' => [],
    'kristina' => [],
    'koly' => ['lol'],
    'lol' => []
];


$result['bogo_sort']           = Sort::bogoSort(Helper::randomArray(7));
$result['bubble_sort']         = Sort::bubbleSort(Helper::randomArray(7));
$result['insert_sort']         = Sort::insertSort(Helper::randomArray(7));
$result['binary_search']       = Search::binarySearch(Helper::sortArray(10000), 147);
$result['breadth-firstSearch'] = Search::breadthFirstSearch($graph['friends'], 'you', 'lol');

var_dump($result);

