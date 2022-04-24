<?php

use Solution as GlobalSolution;

class Solution
{

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isAnagram($s, $t)
    {
        if (strlen($s) != strlen($t))
            return false;
        $s = str_split($s);
        $t = str_split($t);
        $sr = [];
        $tr = [];
        for ($i = 0; $i < count($s); $i++) {
            $sr[$s[$i]] += 1;
            $tr[$t[$i]] += 1;
        }

        foreach ($sr as $key => $value) {
            if($sr[$key] != $tr[$key])
                return false;
        }
        return true;
    }
}
$s = "anagram";
$t = "nagaram";
$test = new Solution();
var_dump($test->isAnagram($s, $t));
