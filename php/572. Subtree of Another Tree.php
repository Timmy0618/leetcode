<?php


// Definition for a binary tree node.

use Solution as GlobalSolution;

class TreeNode
{
    public $val = null;
    public $left = null;
    public $right = null;
    function __construct($val = 0, $left = null, $right = null)
    {
        $this->val = $val;
        $this->left = $left;
        $this->right = $right;
    }
}

class Solution
{

    /**
     * @param TreeNode $root
     * @param TreeNode $subRoot
     * @return Boolean
     */
    public function isSubtree($root, $subRoot)
    {
        if ($root == null)
            return false;
        if ($this->checkRoot($root, $subRoot))
            return true;
        return $this->isSubtree($root->left, $subRoot) || $this->isSubtree($root->right, $subRoot);
    }

    protected function checkRoot($root, $subRoot)
    {
        if ($root == null && $subRoot == null)
            return true;
        if ($root == null || $subRoot == null)
            return false;
        if ($root->val != $subRoot->val)
            return false;
        return $this->checkRoot($root->left, $subRoot->left) && $this->checkRoot($root->right, $subRoot->right);
    }
}

$root = new TreeNode(3, new TreeNode(4, new TreeNode(1), new TreeNode(2, new TreeNode(0))), new TreeNode(5));
$subRoot = new TreeNode(4, new TreeNode(1), new TreeNode(2));

$test = new GlobalSolution();
var_dump($test->isSubtree($root, $subRoot));
