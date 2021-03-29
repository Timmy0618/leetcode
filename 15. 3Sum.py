class Solution:
    def threeSum(self, nums):
        nums.sort()
        result = []
        dict = {}
        for i in range(len(nums)-2):
            j = i+1
            k = len(nums)-1
            now = nums[i]+nums[j]+nums[k]
            while(k != j):
                now = nums[i]+nums[j]+nums[k]
                # print(nums[i],nums[j],nums[k],now)
                if(now == 0):
                    length = len(dict)
                    dict[nums[i], nums[j], nums[k]] = [
                        nums[i], nums[j], nums[k]]
                    if(length != len(dict)):
                        result.append([nums[i], nums[j], nums[k]])
                if(now >= 0):
                    k -= 1
                if(now < 0):
                    j += 1
        return result


test = Solution()
nums = [-1, 0, 1, 2, -1, -4]
#nums = [0]
nums = [0, 0, 0, 0]
nums = [-2, 0, 1, 1, 2]
print(test.threeSum(nums))
