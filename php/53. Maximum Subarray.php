<?php
class Solution
{
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function maxSubArray($nums)
    {
        if (count($nums) == 0)
            return 0;
        $max = $nums[0];
        $tmp = $nums[0];
        for ($i = 1; $i < count($nums); $i++) {
            if ($tmp < 0)
                $tmp = $nums[$i];
            else
                $tmp += $nums[$i];

            if ($tmp > $max)
                $max = $tmp;
        }
        return $max;
    }
}


$input = [1];
// Output: 6

$test = new Solution();
$result = $test->maxSubArray($input);
print_r($result);
