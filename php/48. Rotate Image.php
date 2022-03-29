<?php
class Solution
{
    /**
     * @param Integer[][] $matrix
     * @return NULL
     */
    function rotate(&$matrix)
    {
        for ($i = 0; $i < count($matrix); $i++) {
            $tmp = [];
            for ($j = count($matrix) - 1; $j >= 0; $j--) {
                $tmp[] = $matrix[$j][$i];
            }
            $result[] = $tmp;
        }
        $matrix = $result;
        return $result;
    }
}


// Input: matrix = [[1,2,3],[4,5,6],[7,8,9]]
// Output: [[7,4,1],[8,5,2],[9,6,3]]

$input =  [[1, 2, 3], [4, 5, 6], [7, 8, 9]];

$test = new Solution();
$test->rotate($input);
print_r($input);
