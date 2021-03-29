class Solution:
    def longestCommonPrefix(self, strs):
        j=1
        result = ""
        for i in zip(*strs):
            set1 = set(i)
            if(len(set1) == 1):
                result = strs[0][:j]
                j+=1
            else:
                return result
        return result
            
        

test = Solution()
strs = ["flower", "flow", "flight"]
print(test.longestCommonPrefix(strs))