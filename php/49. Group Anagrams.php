<?php
class Solution
{
    /**
     * @param String[] $strs
     * @return String[][]
     */
    function groupAnagrams($input)
    {
        $result = [];
        $cmp_ary = [];


        foreach ($input as $k => $v) {
            if ($v == null)
                $cmp_ary[$k][] = $v;
            for ($i = 0; $i < strlen($v); $i++) {
                $letter = substr($v, $i, 1);
                $cmp_ary[$k][] = $letter;
            }
        }

        print_r($cmp_ary);

        $null = [];
        foreach ($input as $v) {
            foreach ($cmp_ary as $k => $cmp) {
                // echo "v:$v\n";
                // print_r($cmp);

                if ($v == null) {
                    $null[] = "";
                    // $result[$k][] = $v;
                    break;
                }
                if (strlen($v) != count($cmp))
                    continue;
                else {
                    for ($i = 0; $i < strlen($v); $i++) {
                        // echo substr($v, $i, 1) . "\n";
                        // print_r($cmp);
                        // var_dump(in_array(substr($v, $i, 1), $cmp));
                        if (in_array(substr($v, $i, 1), $cmp)) {
                            unset($cmp[array_search(substr($v, $i, 1), $cmp)]);
                        } else {
                            // var_dump("not in ");
                            break;
                        }
                    }
                }
                // var_dump(count($cmp));
                if (count($cmp) == 0) {
                    $result[$k][] = $v;
                    break;
                }
            }
        }
        if (count($null) != 0)
            $result[] = $null;
        return $result;
    }
}

// Input: strs = ["eat","tea","tan","ate","nat","bat"]
// Output: [["bat"],["nat","tan"],["ate","eat","tea"]]
$input = ["eat", "tea", "tan", "ate", "nat", "bat"];
// $input = ["", "b"];
// $input = ["ddddddddddg", "dgggggggggg"];
// $input = ["ac", "c"];
// $input = ["", ""];
// $input = ["stop", "pots", "reed", "", "tops", "deer", "opts", ""];

$test = new Solution();
$result = $test->groupAnagrams($input);
print_r($result);
