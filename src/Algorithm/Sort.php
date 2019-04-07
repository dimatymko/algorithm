<?php

namespace Algorithm;

class Sort
{
    /**
     * Random sort
     *
     * @param array $array the array to sort
     * @return int number of comparisons
     */
    public static function bogoSort(array $array): int
    {
        $default = $array;
        sort($array);
        $number = 0;
        while (md5(implode(',', $default)) !== md5(implode(',', $array))) {
            shuffle($default);
            $number++;
        }
        
        return $number;
    }
    
    /**
     * Bubble sort
     *
     * @param array $array the array to sort
     * @return int number of comparisons
     */
    public static function bubbleSort(array $array): int
    {
        $number = 0;
        $count  = count($array);
        for ($j = 0; ($count - 1) > $j; $j++) {
            for ($i = 0; ($count - $j - 1) > $i; $i++) {
                if ($array[$i] > ($second = $array[$i + 1])) {
                    $array[$i + 1] = $array[$i];
                    $array[$i]     = $second;
                    $number++;
                }
            }
        }
        
        return $number;
    }
    
}