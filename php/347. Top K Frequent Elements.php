<?php

class Solution
{

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Integer[]
     */
    function topKFrequent($nums, $k)
    {
        $result = [];
        $rec = [];
        foreach ($nums as $key => $num) {
            if (!isset($rec[$num]))
                $rec[$num] = 0;
            $rec[$num]++;
        }
        arsort($rec);
        $rec = array_keys($rec);
        for ($i = 0; $i < $k; $i++) {
            $result[] = $rec[$i];
        }

        return $result;
    }
}

$test = new Solution();
$nums = [1, 1, 1, 2, 2, 3, 3, 3, 3];
$k = 2;
$test->topKFrequent($nums, $k);
