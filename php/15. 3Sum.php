<?php

class Solution
{

    /**
     * @param Integer[] $nums
     * @return Integer[][]
     */
    function threeSum($nums)
    {
        $result = [];
        sort($nums);

        for ($i = 0; $i < count($nums) - 2; $i++) {
            $one = $i;
            $two = $one + 1;
            $three = count($nums) - 1;
            if ($nums[$one] > 0 && $nums[$one] == $nums[$one - 1])
                continue;

            while ($two < $three) {
                $sum = $nums[$one] + $nums[$two] + $nums[$three];
                if ($sum > 0) {
                    $three--;
                } elseif ($sum < 0) {
                    $two++;
                } else {
                    $result[] = [$nums[$one], $nums[$two], $nums[$three]];
                    $three--;
                    while ($two < $three && $nums[$three] != $nums[$three + 1])
                        $three--;
                }
            }
        }

        return $result;
    }
}
$test = new Solution();
$nums = [0, 0, 0, 0];
print_r($test->threeSum($nums));
