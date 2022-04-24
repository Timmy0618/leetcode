<?php

/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val) { $this->val = $val; }
 * }
 */

// https://matthung0807.blogspot.com/2020/04/floyd-cycle-detection-algorithm-floyd.html
class Solution
{
    /**
     * @param ListNode $head
     * @return Boolean
     */
    function hasCycle($head)
    {
        if ($head === null || $head->next === null)
            return false;
        $slow = $head;
        $fast = $head;
        while ($fast !== null && $fast->next !== null) {
            $fast = $fast->next->next;
            $slow = $slow->next;
            if ($slow === $fast)
                return true;
        }

        return false;
    }
}
