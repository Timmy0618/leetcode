<?php


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
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    function mergeTwoLists($l1, $l2)
    {
        $result = new ListNode(0);
        $tmp = $result;

        while ($l1 != null && $l2 != null) {
            if ($l1->val <= $l2->val) {
                echo "l1";
                echo $l1->val;
                echo "\n";
                $tmp->next = $l1;
                $l1 = $l1->next;
            } else {
                echo "l2";
                echo $l2->val;
                echo "\n";
                $tmp->next = $l2;
                $l2 = $l2->next;
            }
            $tmp = $tmp->next;
        }
        $tmp->next = $l1 == null ? $l2 : $l1;
        return $result->next;
    }
}


// Input: l1 = [1,2,4], l2 = [1,3,4]
// Output: [1,1,2,3,4,4]
$test = new Solution();
$l1 = new ListNode(1, new ListNode(2, new ListNode(4)));
$l2 = new ListNode(1, new ListNode(3, new ListNode(4)));
$result = $test->mergeTwoLists($l1, $l2);
print_r($result);
