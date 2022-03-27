class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function climbStairs($n) {
        $one=1;
        $two = 1;
        for($i = 0; $i < $n-1; $i++){
             $tmp = $one;
             $one = $one + $two;
             $two = $tmp;
        }
        
        return $one;
        
    }
}