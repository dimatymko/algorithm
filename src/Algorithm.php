<?php


namespace Calculation;


class Algorithm
{
    /**
     * @var Algorithm
     */
    private static $algorithm;

    public static function run()
    {
        if (!self::$algorithm) {
            self::$algorithm = new Algorithm();
        }

        return self::$algorithm;
    }

    /**
     * @param array $array the array to sort
     * @return int
     */
    public function GodSort($array)
    {
        $default = $array;
        sort($array);
        $count = 0;
        while (md5(implode(',', $default)) !== md5(implode(',', $array))) {
            shuffle($default);
            echo $count++ . "\n";
        }

        return $count;
    }

}