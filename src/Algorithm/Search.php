<?php

namespace Algorithm;

use SplDoublyLinkedList;
use SplQueue;

class Search
{
    /**
     * Binary search
     *
     * @param array $arraySort the array is sorted
     * @param int $item conceived number
     * @return int number of comparisons
     */
    public static function binarySearch(array $arraySort, int $item): int
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

        return 0;
    }

    /**
     * Breadth-first search
     *
     * @param array $graph there is a graph
     * @param mixed $name first element
     * @param mixed $target what should find
     * @return int number of plucked element
     */
    public static function breadthFirstSearch(array $graph, $name, $target): int
    {
        $queue = new SplQueue;
        $queue->setIteratorMode(SplDoublyLinkedList::IT_MODE_DELETE);
        self::enqueue($queue, $graph[$name]);

        $searched[$name] = true;
        $count           = 0;

        while (!$queue->isEmpty()) {
            $element = $queue->dequeue();

            if (isset($searched[$element]))
                continue;


            $count++;

            if ($element === $target) {
                return $count;
                
            } else {
                self::enqueue($queue, $graph[$element]);
                $searched[$element] = true;
            }
        }

        return 0;
    }

    private static function enqueue(SplQueue $queue, array $graph): void
    {
        foreach ($graph as $item) {
            $queue->enqueue($item);
        }

        return;
    }
}