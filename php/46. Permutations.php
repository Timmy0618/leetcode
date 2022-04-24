<?php

use LDAP\Result;

class Solution
{
    public $result = [];
    /**
     * @param Integer[] $nums
     * @return Integer[][]
     */
    function permute($nums)
    {
        $this->dfs([], $nums);
        // print_r($this->result);
    }

    function dfs($path, $nums)
    {
        if (count($nums) == 0) {
            $this->result[] = $path;
        }

        for ($i = 0; $i < count($nums) - 1; $i++) {
            $path[] = $nums[$i];
            $v = $nums[$i];
            unset($nums[$i]);
            $this->dfs($path, $nums);
            $nums[$i] = $v;
        }
    }
}

$test = new Solution();
$nums = [1, 2, 3];
$test->permute($nums);
