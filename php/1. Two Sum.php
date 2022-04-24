<?php

class Solution
{

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target)
    {
        $result = [];
        $tmp = [];
        foreach ($nums as $key => $value) {
            if (isset($tmp[$value])) {
                $result[] = $key;
                $result[] = $tmp[$value];
                return $result;
            }
            $tmp[$target - $value] = $key;
        }

        return $result;
    }
}

$test = new Solution();
$nums = [2, 7, 11, 15];
$target = 9;
var_dump($test->twoSum($nums, $target));
