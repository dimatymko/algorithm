<?php

//BINARY SEARCH

$arraySort = [];
$count     = 888;
for ($i = 1; $count >= $i; $i++) {
    $arraySort[] = $i;
}

/**
 * @param array $arraySort
 * @param int $item find this number
 * @return int
 */
$binarySearch = function ($arraySort, $item) {
    $low  = 0;
    $high = count($arraySort) - 1;

    while ($low <= $high) {
        $middle = ($low + $high) / 2;
        $guess  = $arraySort[$middle];
        if ($guess === $item)
            return $guess;

    }
};

$binarySearch($arraySort, 45);


//BOGOSORT

//$array = [4, 5, 33, 32, 23, 24, 546, 456, 45, 6, 456, 45, 65, 4];
//
//$bogoSort = function ($array) {
//    $default = $array;
//    sort($array);
//    $count = 0;
//    while (md5(implode(',', $default)) !== md5(implode(',', $array))) {
//        shuffle($default);
//        echo $count++ . "\n";
//    }
//
//    echo "Amazing! " . $count;
//};
//
//$bogoSort($array);

//Bubble sort

//$array = [1, 6, 3, 345, 45, 7, 234234,2,23,42,34,3,423,546,2567,3467,5468,647,9,7];
//$sort  = function ($array) {
//    $number = 0;
//    $count = count($array);
//    for ($j = 0; ($count - 1) > $j; $j++) {
//        for ($i = 0; ($count - $j - 1) > $i; $i++) {
//            if ($array[$i] > ($second = $array[$i + 1])) {
//                $array[$i + 1] = $array[$i];
//                $array[$i]     = $second;
//            }
//        }
//    }
//
//    return $array;
//};
//
//var_dump($sort($array));

//Rearrange array

//$array     = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11,12312,3,23,421,34,1345,23,54,235634576,6864,89567,9,5,451,345,1,45,345,34567,567,4567,];
//$rearrange = function ($array) {
//    $newArray = [];
//    for ($count = count($array); 0 !== $count; $count--) {
//        $newArray[] = $array[$count-1];
//    }
//
//    return $newArray;
//};
//
//var_dump($rearrange($array));

//Rearrange string

//$string = 'aaaaaaaa 3333333 222222  j111';
//$rev = '';
//for ($i = strlen($string); $i >= 0; $i--) {
//    $rev .= $string[$i];
//}
//echo $rev;

//Sorting inserts

//$array = [9, 11, 12, 10, 15,10, 7, 4, 13, 3, 1, 14, 5, 6, 2, 0, 8];
//
//$insertionSort = function ($array) {
//    $count = count($array);
//    for ($j = 0; ($count - 1) > $j; $j++) {
//        $i = $j;
//        while ($i > (-1)) {
//            if ($array[$i] > $second = $array[$i + 1]) {
//                $array[$i + 1] = $array[$i];
//                $array[$i] = $second;
//            }
//            $i--;
//        }
//
//    }
//
//    print_r($array);
//};
//
//$insertionSort($array);