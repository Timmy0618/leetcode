<?php

use Solution as GlobalSolution;

class Solution
{

    /**
     * @param Integer[][] $intervals
     * @return Integer
     */
    function eraseOverlapIntervals($intervals)
    {
        $cnt = 0;
        $end = 0;
        usort($intervals, function ($a, $b) {
            if ($a[1] === $b[1]) {
                return 0;
            }
            return $a[1] < $b[1] ? -1 : 1;
        });
        foreach ($intervals as $key => $v) {
            if ($key == 0)
                $end = $v[1];
            elseif ($v[0] >= $end) {
                $end = $v[1];
            } else {
                $cnt++;
            }
        }

        return $cnt;
    }
}

$intervals = [[1, 2], [2, 3], [3, 4], [-100, -2], [5, 7]];
$test = new Solution();
var_dump($test->eraseOverlapIntervals($intervals));
