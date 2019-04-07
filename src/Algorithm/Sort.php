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
    public static function bogo(array $array): int
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
    
}