class Solution:
    def permute(self, nums):
        res = []
        self.dfs(nums, [], res)
        return res

    def dfs(self, nums, path, res):
        if not nums:
            res.append(path)
            # return # backtracking
        for i in range(len(nums)):
            print(res)
            self.dfs(nums[:i] + nums[i + 1 :], path + [nums[i]], res)


nums = [1, 2, 3]
test = Solution()
test.permute(nums)
