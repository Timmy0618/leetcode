<?php
class Solution
{
    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function search($nums, $target)
    {
        $strat = 0;
        $end = count($nums) - 1;
        while ($strat < $end) {
            $mid = (int) (($strat + $end) / 2);
            if ($nums[$mid] > $nums[$end]) {
                if ($target > $nums[$mid] || $target <= $nums[$end]) {
                    $strat = $mid + 1;
                } else {
                    $end = $mid;
                }
            } else {
                if ($target > $nums[$mid] && $target <= $nums[$end]) {
                    $strat = $mid + 1;
                } else {
                    $end = $mid;
                }
            }
        }
        if ($strat == $end && $nums[$strat] != $target)
            return -1;
        echo $mid;
        echo "\n";
        return $strat;
    }
}


// Input: nums = [4,5,6,7,0,1,2], target = 0
// Output: 4
$nums = [4, 5, 6, 7, 0, 1, 2];
$target = 3;
$test = new Solution();
$result = $test->search($nums, $target);
echo $result;
