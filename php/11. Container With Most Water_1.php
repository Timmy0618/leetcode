<?php

class Solution
{

    /**
     * @param Integer[] $height
     * @return Integer
     */
    function maxArea($height)
    {
        $start = 0;
        $end = count($height) - 1;
        $ans = 0;

        while ($start < $end) {
            $ans = max($ans, min($height[$start], $height[$end]) * ($end - $start));
            // var_dump($ans);

            if ($height[$start] >= $height[$end])
                $end--;
            else
                $start++;
        }

        return $ans;
    }
}

$test = new Solution();
$height = [0, 1, 0, 2, 1, 0, 1, 3, 2, 1, 2, 1];
var_dump($test->maxArea($height));
