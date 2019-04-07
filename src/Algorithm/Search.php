<?php

namespace Algorithm;

class Search
{
    /**
     * Binary search
     *
     * @param array $arraySort the array is sorted
     * @param int   $item conceived number
     * @return int number of comparisons
     */
    public static function binarySearch(array $arraySort, int $item): int
    {
        $number = 0;
        $low    = 0;
        $high   = count($arraySort);
        
        while ($low <= $high) {
            $middle = (int)round(($low + $high) / 2, PHP_ROUND_HALF_DOWN);
            $guess  = $arraySort[$middle];
            $number++;
            
            if ($guess === $item)
                return $number;
            
            if ($guess < $item) {
                $low = $middle + 1;
            } else {
                $high = $middle - 1;
            }
        }
    }
}
/*
------------------------------------------------
справочник
array number   0 1 2 3 4 5 6 7 8  9
$array       = 1 2 3 4 5 6 7 8 9 10

ищем
$a = 7

определяем большее порядковое array number
$high = count($array) - 1 = 9;

определяем меньшее порядковое array number
$low = 0;

делим на
$mid = ($low + high) / 2 = 9 / 2 = 4

2. если меньше


получаем
$guess = $array[4] = 5

сравниваем
$a >= $guess  or 9 >= 5

if (true) {
  if ($a === $b) {
    return;
  
  }
$low = mid +1;

} else {
    $high =  mid - 1;
 }

 
if полученное number more то делим пол
Если полученное число равно, то возвращаем количество comparisons.
*/