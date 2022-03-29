<?php
// Example 1:
// Input: s = "()"
// Output: true
// Example 2:
// Input: s = "()[]{}"
// Output: true
// Example 3:
// Input: s = "(]"
// Output: false
// Example 4:
// Input: s = "([)]"
// Output: false
// Example 5:
// Input: s = "{[]}"
// Output: true

class Solution
{
    /**
     * @param String $s
     * @return Boolean
     */
    public function isValid($s)
    {
        $input = str_split($s);
        $stack = [];
        foreach ($input as $v) {
            switch ($v) {
                case '{':
                    array_push($stack, '}');
                    break;
                case '}':
                    if (array_pop($stack) != '}')
                        return false;
                    break;
                case '(':
                    array_push($stack, ')');
                    break;
                case ')':
                    if (array_pop($stack) != ')')
                        return false;
                    break;
                case '[':
                    array_push($stack, ']');
                    break;
                case ']':
                    if (array_pop($stack) != ']')
                        return false;
                    break;
            }
        }
        if (count($stack) != 0)
            return false;
        return true;
    }
}

$test = new Solution;
$s = "([)]";
$result = $test::isValid($s);
var_dump($result);
