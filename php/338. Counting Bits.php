<?php
class Solution
{

    /**
     * @param Integer $n
     * @return Integer[]
     */
    function countBits($n)
    {
        $res[0] = 0;
        for ($i = 0; $i <= $n; $i++) {
            if ($i % 2 == 0)
                $res[$i] = $res[$i / 2];
            else
                $res[$i] = $res[$i - 1] + 1;
        }

        return $res;
    }
}

$test = new Solution();
$n = 5;
var_dump($test->countBits($n));
