<?php
class Solution
{

    /**
     * @param Integer[] $coins
     * @param Integer $amount
     * @return Integer
     */
    function coinChange($coins, $amount)
    {
        $dp[0] = 0;
        for ($i = 1; $i <= $amount; $i++) {
            if (!isset($dp[$i]))
                $dp[$i] = $amount + 1;
            foreach ($coins as $coin) {
                if ($coin <= $i) {
                    $dp[$i] = min($dp[$i], $dp[($i - $coin)] + 1);
                }
            }
        }
        return $dp[$amount] > $amount ? -1 : $dp[$amount];
    }
}

$test = new Solution();
$coins = [1];
$amount = 0;
$test->coinChange($coins, $amount);
