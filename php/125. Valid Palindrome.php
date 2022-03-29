<?php

class Solution
{

    /**
     * @param String $s
     * @return Boolean
     */
    function isPalindrome($s)
    {
        if (empty($s))
            return true;

        $splitStr = str_split($s, 1);
        $head = 0;
        $bottom = count($splitStr) - 1;
        while ($head <= $bottom) {
            if (!preg_match('/[A-Za-z0-9]/', $splitStr[$head]))
                $head++;
            else if (!preg_match('/[A-Za-z]/', $splitStr[$bottom]))
                $bottom--;
            else {
                if (strtolower($splitStr[$head]) != strtolower($splitStr[$bottom]))
                    return false;
                $head++;
                $bottom--;
            }
        }

        return true;
    }
}

$test = new Solution();
$s = "race a car";
$s = "A man, a plan, a canal: Panama";
$s = "0P";
var_dump($test->isPalindrome($s));
