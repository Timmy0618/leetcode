<?php
// Input: candidates = [2,3,6,7], target = 7
// Output: [[2,2,3],[7]]
// Explanation:
// 2 and 3 are candidates, and 2 + 2 + 3 = 7. Note that 2 can be used multiple times.
// 7 is a candidate, and 7 = 7.
// These are the only two combinations.
class Solution
{
    protected $result = [];
    /**
     * @param Integer[] $candidates
     * @param Integer $target
     * @return Integer[][]
     */

    public function combinationSum($candidates, $target)
    {
        $this->backtrack($candidates, $target, 0);
        // print_r($this->result);
    }

    public function backtrack($candidates, $target, $start, $result = [])
    {
        if ($target < 0)
            return;
        elseif ($target == 0) {
            $this->result[] = $result;
        } else {
            for ($i = $start; $i < count($candidates); $i++) {
                $result[] = $candidates[$i];
                print_r($target . "\n");
                print_r($result);
                $this->backtrack($candidates, $target - $candidates[$i], $i, $result);
                array_pop($result);
            }
        }
    }
}

$candidates = [2, 3, 6, 7];
$target = 7;
$test = new Solution();
$test->combinationSum($candidates, $target);

/*
 public List<List<Integer>> combinationSum(int[] nums, int target) {
    List<List<Integer>> list = new ArrayList<>();
    Arrays.sort(nums);
    backtrack(list, new ArrayList<>(), nums, target, 0);
    return list;
}
private void backtrack(List<List<Integer>> list, List<Integer> tempList, int [] nums, int remain, int start){
    if(remain < 0) return;
    else if(remain == 0) list.add(new ArrayList<>(tempList));
    else{
        for(int i = start; i < nums.length; i++){
            tempList.add(nums[i]);
            backtrack(list, tempList, nums, remain - nums[i], i); // not i + 1 because we can reuse same elements
            tempList.remove(tempList.size() - 1);
        }
    }
}
 */
