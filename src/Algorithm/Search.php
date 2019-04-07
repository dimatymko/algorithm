<?php

namespace Algorithm;

class Search
{
    /**
     * Binary search
     *
     * @param array $arraySort the array is sorted
     * @param int   $item conceived number
     * @return int/null number of comparisons
     */
    public static function binarySearch(array $arraySort, int $item)
    {
        $number = 0;
        $low    = 0;
        $high   = count($arraySort) - 1;
        
        while ($low <= $high) {
            $middle = (int)round(($low + $high) / 2, PHP_ROUND_HALF_DOWN);
            $number++;
            
            switch ($arraySort[$middle]) {
                case $item:
                    return $number;
                case ($arraySort[$middle] < $item):
                    $low = $middle + 1;
                    break;
                case ($arraySort[$middle] > $item):
                    $high = $middle - 1;
                    break;
            }
        }
        
        return null;
    }
}