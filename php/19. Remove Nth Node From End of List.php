<?php
// Example 1:
// Input: head = [1,2,3,4,5], n = 2
// Output: [1,2,3,5]
// Example 2:
// Input: head = [1], n = 1
// Output: []
// Example 3:
// Input: head = [1,2], n = 1
// Output: [1]

class ListNode
{
    public $val = 0;
    public $next = null;
    function __construct($val = 0, $next = null)
    {
        $this->val = $val;
        $this->next = $next;
    }
}

class Solution
{
    /**
     * @param ListNode $head
     * @param Integer $n
     * @return ListNode
     */
    function removeNthFromEnd($head, $n)
    {
        $head_tmp = $head;
        $result = new ListNode(0);
        $tmp = $result;
        $tmp->next = $head;
        $count = 0;
        $len = 1;

        while ($head->next) {
            $len++;
            $head = $head->next;
        }
        while ($result->next) {
            print_r($count);
            if ($count == $len - $n) {
                // print_r($head_tmp->next->next);
                $tmp->next = $head_tmp->next;
                print_r($head_tmp->next);
                break;
            }
            $head_tmp = $head_tmp->next;
            $tmp = $tmp->next;
            // print_r($tmp);

            $count++;
        }
        return $result->next;
    }
}
$test = new Solution;
$n = 1;
$head = new ListNode(1, new ListNode(2, new ListNode(3, new ListNode(4, new ListNode(5)))));
$result = $test::removeNthFromEnd($head, $n);
print_r($result);

// $start = new ListNode(0);
// $slow = $start;
// $fast = $start;
// $slow->next = $head;
// print_r($start->next);
