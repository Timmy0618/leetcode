<?php

use Exception;
// Definition for a singly-linked list.
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
     * @param ListNode[] $lists
     * @return ListNode
     */
    public function mergeKLists($lists)
    {
        $tmp = new ListNode();
        // print_r($lists);
        foreach ($lists as $key => $list) {
            if ($key == 0) {
                $tmp = $list;
            } else {
                $tmp = $this->mergeList($tmp, $list);
            }
        }
    }

    public function mergeList($list1, $list2)
    {
        print_r($list1);
        $result = new ListNode();
        print_r($list2);

        while ($list1 != null && $list2 != null) {
            if ($list1->val() == $list2->val()) {
                $result = new ListNode($list1->val());
                $list1 = $list1->next();
            } elseif ($list1->val() > $list2->val()) {
                $list1 = $list2->next();
            } elseif ($list1->val() < $list2->val()) {
                $list1 = $list1->next();
            }
        }

        exit;
    }
}
try {
    // $lists = [[1, 4, 5], [1, 3, 4], [2, 6]];

    $lists[0] = new ListNode(1, new ListNode(4, new ListNode(5)));
    $lists[1] = new ListNode(1, new ListNode(3, new ListNode(4)));
    $lists[2] = new ListNode(2, new ListNode(6));
    $test = new Solution();
    $test->mergeKLists($lists);
} catch (Exception $e) {
    var_dump($e);
}
