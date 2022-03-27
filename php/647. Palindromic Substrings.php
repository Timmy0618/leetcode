<?php
class Solution
{
    public $count = 0;
    /**
     * @param String $s
     * @return Integer
     */
    public function countSubstrings($s)
    {
        $strAry = str_split($s);
        if (strlen($s) == 0)
            return 0;
        for ($i = 0; $i < strlen($s); $i++) {
            $this->checkPalindrome($strAry, $i, $i);
            $this->checkPalindrome($strAry, $i, $i + 1);
        }

        return $this->count;
    }

    private function checkPalindrome($s, $left, $right)
    {
        while ($left >= 0 && $right < count($s) && $s[$left] == $s[$right]) {
            $this->count++;
            $left--;
            $right++;
        }
    }
}

$s = "aba";

$test = new Solution();
var_dump($test->countSubstrings($s));
