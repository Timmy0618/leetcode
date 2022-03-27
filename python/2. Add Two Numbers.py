class ListNode:
    def __init__(self, val=0, next=None):
        self.val = val
        self.next = next


class Solution:
    def addTwoNumbers(self, l1: ListNode, l2: ListNode):
        result = ListNode(0)
        tmp = result
        carry = 0
        while l1 and l2:
            sum = (l1.val+l2.val+carry) % 10
            carry = int((l1.val+l2.val+carry)/10)
            tmp.next = ListNode(sum)
            tmp = tmp.next
            l1 = l1.next
            l2 = l2.next
        while l1:
            sum = (l1.val+carry) % 10
            carry = int((l1.val+carry)/10)
            tmp.next = ListNode(sum)
            tmp = tmp.next
            l1 = l1.next
        while l2:
            sum = (l2.val+carry) % 10
            carry = int((l2.val+carry)/10)
            tmp.next = ListNode(sum)
            tmp = tmp.next
            l2 = l2.next
        if carry > 0:
            tmp.next = ListNode(carry)
            tmp = tmp.next
        return result.next


test = Solution()
l1 = ListNode(3, ListNode(7))
l2 = ListNode(9, ListNode(2))
result = test.addTwoNumbers(l1, l2)
print(result.val)
