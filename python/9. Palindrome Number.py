class Solution:
    def isPalindrome(self, x: int):
        if(x<0):
            return False
        length = len(str(x))
        front = x
        back = x
        for i in range(length):
            if(front//(10**(length-i-1)) == back%10):
                back = back//10
                front = front%(10**(length-i-1))
                continue
            else:
                return False

        return True
        

test = Solution()
x = 121
print(test.isPalindrome(x))