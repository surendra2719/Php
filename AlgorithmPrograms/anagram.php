<?php
/*****************************************************************************************
 *purpose   : One string is an anagram of another if the second is simply a rearrangement of the first.
              For example, 'heart' and 'earth' are anagrams
 * @file    : anagram.php
 * @overview:Take 2 Strings as Input such abcd and dcba and Check for Anagrams
 * @author  : surendra
 * @version : 1.0
 * @since   : 28/01/2019
 **************************************************************************/
/**
 * accessing util
 */
include 'utilityForAlgorithm.php';
echo "enter first string ";
$stringOne = Utility::readString();
/**
 * printing the two strings
 */
echo "enter second string ";
$stringTwo = Utility::readString();
/**
 * accessing the method from util
 */
Utility::anagram($stringOne, $stringTwo);
?>
