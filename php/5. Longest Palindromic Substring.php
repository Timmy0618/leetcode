<?php

class Solution
{

    /**
     * @param String $s
     * @return String
     */
    function longestPalindrome($s)
    {
        $maxStr = "";
        $s = str_split($s);
        for ($i = 0; $i < count($s); $i++) {
            $tmp = $this->helper($s, $i, $i);
            if (strlen($tmp) > strlen($maxStr))
                $maxStr = $tmp;
            $tmp = $this->helper($s, $i, $i + 1);
            if (strlen($tmp) > strlen($maxStr))
                $maxStr = $tmp;
        }

        return $maxStr;
    }

    function helper($s, $l, $r)
    {
        $result = "";
        while ($l >= 0 && $r < count($s) && $s[$l] == $s[$r]) {
            $result = implode("", array_slice($s, $l, $r - $l + 1));
            $l--;
            $r++;
        }

        return $result;
    }
}

$test = new Solution();
$s = "a";
// var_dump(implode("", array_slice(str_split($s), 0, 1)));
// exit;
var_dump($test->longestPalindrome($s));
