<?php

/*****************************************************************************************
 *purpose   : Read in Arithmetic Expression such as  BALANCED PARANTHESIS (),[],{}

 * @file    : balancedParanthesis.php
 * @overview: Take an Arithmetic Expression such as balance paranthesis
 *            where parentheses are used to order the performance of operations.
 *            Ensure parentheses must appear in a balanced
 * @version : 1.0
 * @since   : 28/01/2019
 ***************************************************************************/
$stackaccess = include '../utilityForDataStructures/stack.php'; // accessing  a stack class through require keyword
include '/home/bridgelabz/php programs/utilityForDataStructures/utilityForDataStructers.php';
function stackmethod()
/**
 * it is function to calling stack
 */

{
    $stack = new Stack;
    try {
        echo ("Enter your mathematical expression with parantheses "); // giving an input by user
        fscanf(STDIN, "%s\n", $expression);
        if (is_null($expression) || is_numeric($expression)) {
            throw new Exception(" inval\n");
        }

    } catch (Exception $err) {
        echo "err" . $err->getMessage();
        exit();
    }

    $stringLength = strlen($expression);
    $character = str_split($expression);
    /**
     * declaring  varaibles
     */
    for ($i = 0; $i < $stringLength; $i++) // for given expression it will itirated by for loop
    {
        /**
         * checking the characters giving paranthesis through if loop
         */

        if ($character[$i] == '(' || $character[$i] == '[' || $character[$i] == '{') {
            $stack->push($character[$i]);
/**
 * accessing push method from stack class
 */
        } else {
            switch ($character[$i]) {
                case ')':if ($stack->pop() != '(') {
                        return false;
                    }
                    break;
                case ']':if ($stack->pop() != '[') {
                        return false;
                    }
                    break;
                case '}':if ($stack->pop() != '{') {
                        return false;
                    }
                    break;
            }
        }
    }
/**
 * checking hte size of that string and  verifying boolean condition with stack
 */
    if ($stack->size() == 0) {
        return true;
    }
    return false;
}
$bol = stackmethod();
if ($bol) {
    echo ("String is balanced");
} else {
    echo ("Not balanced");
}
