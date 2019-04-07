<?php

namespace Algorithm\Components;

class Helper
{
    /**
     * Array is not sorted
     *
     * @param int $count
     * @return array
     */
    public static function randomArray(int $count): array
    {
        $number = 0;
        $array  = [];
        $value  = rand(1, 10);
        
        while ($number !== $count) {
            $array [] = $value++;
            $number++;
        }
        
        shuffle($array);
        
        return $array;
    }
    
    /**
     * Array is sorted
     *
     * @param int $count
     * @return array
     */
    public static function sortArray(int $count): array
    {
        $number = 0;
        $array  = [];
        
        while ($number !== $count) {
            $array [] = $number++;
        }
        
        return $array;
    }
    
}