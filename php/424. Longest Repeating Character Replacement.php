<?php

class Solution
{

    /**
     * @param String $s
     * @param Integer $k
     * @return Integer
     */
    function characterReplacement($s, $k)
    {
        $s = str_split($s);
        $maxCount = 0;
        $maxLen = 0;
        $count = [];
        $start = 0;
        for ($end = 0; $end < count($s); $end++) {
            if (!isset($count[$s[$end]]))
                $count[$s[$end]] = 0;
            $maxCount = max($maxCount, ++$count[$s[$end]]);
            while ($end - $start + 1 - $maxCount > $k) {
                $count[$s[$start]]--;
                $start++;
            }
            $maxLen = max($maxLen, $end - $start + 1);
        }

        return $maxLen;
    }
}

$test = new Solution();
$s = "AABABBA";
$k = 1;
var_dump($test->characterReplacement($s, $k));
