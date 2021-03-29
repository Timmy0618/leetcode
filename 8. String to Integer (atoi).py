import array


class Solution:
    def myAtoi(self, s: str):
        neg = 0
        result = 0
        start = False
        ary = []
        count = 0
        for i in range(len(s)):
            if(s[i]==' ' and start==False):
                continue
            elif(s[i]==' ' and start==True):
                break
            if (s[i] != ' ' and s[i] != '-' and s[i] != '+'):
                try:
                    start = True
                    if(count<2):
                        ary.append(int(s[i]))
                except:
                    break
            elif(s[i] == '-'):
                if(start):
                    break
                else:
                    start = True
                count +=1
                neg = 1
            elif(s[i] == '+'):
                if(start):
                    break
                else:
                    start = True
                count +=1
        for i in range(len(ary)):
            tmp = ary[i]
            result += tmp*(10**(len(ary)-i-1))
        if(neg == 1):
            result = -1*result
        if(result < -2**31):
            return -2**31
        if(result > 2**31-1):
            return 2**31-1
        return result


test = Solution()
#s = "   -42"
#s = "00000-42a1234"
#s = "000000000000000000000000000011"
#s = "-91283472332"
# s = "21474836460"
#s = "words and 987"
#s = "   +0 123"
s = "2147483648"
print(test.myAtoi(s))
