<?php
class Solution
{

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function missingNumber($nums)
    {
        $tmp = 0;
        for ($i = 0; $i <= count($nums); $i++) {
            $tmp += $i;
        }
        return $tmp - array_sum($nums);
    }
}

$nums = [9, 6, 4, 2, 3, 5, 7, 0, 1];
$test = new Solution();
var_dump($test->missingNumber($nums));
