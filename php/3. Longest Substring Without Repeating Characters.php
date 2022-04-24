<?php

class Solution
{

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLongestSubstring($s)
    {
        if (strlen($s) == 0)
            return 0;
        $tmp = [];
        $max = 0;
        $start = -1;
        foreach (str_split($s) as $key => $value) {
            var_dump($value);
            var_dump($tmp[$value]);
            if ($tmp[$value] > $start)
                $start = $tmp[$value];
            $tmp[$value] = $key;
            $max = max($max, $key - $start);
        }

        return $max;
    }
}

$test = new Solution();
$s = "dvdf";
var_dump($test->lengthOfLongestSubstring($s));
