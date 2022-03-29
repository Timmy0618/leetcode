<?php
// Example 2:
// Input: height = [1,1]
// Output: 1
// Example 3:
// Input: height = [4,3,2,1,4]
// Output: 16
// Example 4:
// Input: height = [1,2,1]
// Output: 2

class Solution
{
    /**
     * @param Integer[] $height
     * @return Integer
     */
    public function maxArea($height)
    {
        $left = 0;
        $right = count($height) - 1;
        $leftMax = 0;
        $rightMax = 0;
        $ans = 0;
        while ($left < $right) {
            if ($height[$left] < $height[$right]) {
                if ($height[$left] >= $leftMax) {
                    $leftMax = $height[$left];
                } else {
                    $ans += $leftMax - $height[$left];
                }
                $left++;
            } else {
                if ($height[$right] >= $rightMax) {
                    $rightMax = $height[$right];
                } else {
                    $ans += $rightMax - $height[$right];
                }
                $right--;
            }
        }
        return $ans;
    }
}

$test = new Solution();
$height = [0, 1, 0, 2, 1, 0, 1, 3, 2, 1, 2, 1];
print_r($test->maxArea($height));
