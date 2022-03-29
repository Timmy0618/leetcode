<?php
class Solution
{
    /**
     * @param Integer[][] $matrix
     * @return Integer[]
     */
    function spiralOrder($matrix)
    {
        $up = 0;
        $down = count($matrix);
        $left = 0;
        $right = count($matrix[0]);
        $result = [];
        while ((count($result) * count($result[0])) < count($matrix) * count($matrix[0])) {
            for ($i = $left; $i < $right; $i++) { }
            for ($i = $up + 1; $i < $down - 1; $i++) { }
            for ($i = $right; $i < $left; $i++) { }
            for ($i = $down + 1; $i < $up - 1; $i++) { }

            $left++;
            $right--;
            $up++;
            $down--;
        }
    }
}


// Input: matrix = [[1,2,3],[4,5,6],[7,8,9]]
// Output: [1,2,3,6,9,8,7,4,5]
$input = [[1, 2, 3], [4, 5, 6], [7, 8, 9]];
$test = new Solution();
$test->spiralOrder($input);

// 00
// 10 20 x
// 21 22 y
// 12 02 x
// 01    y
// 11    x
