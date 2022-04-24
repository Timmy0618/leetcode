<?php

class Solution
{

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function lengthOfLIS($nums)
    {
        $result = [];
        foreach ($nums as $i => $num) {
            if (count($result) == 0 || $result[count($result) - 1] < $num) {
                $result[] = $num;
            } else {
                foreach ($result as $key => $value) {
                    if($value == $num)
                        break;
                    if ($value > $num){
                        $result[$key] = $num;
                        break;
                    }
                }
            }
        }
        return count($result);
    }
}

$test = new Solution();
// $nums = [10, 9, 2, 5, 3, 7, 101, 18];
$nums = [4, 10, 4, 3, 8, 9];
print_r($test->lengthOfLIS($nums));
