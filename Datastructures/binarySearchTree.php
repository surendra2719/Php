<?php
/*****************************************************************************************
 * Purpose :    Read from file the list of Numbers and take user input for a new number
  

 * @file    :  binarySearchTree.php
 * @overview:   Read a List of Numbers from a file and arrange it ascending Order in a
                Linked List. Take user input for a number, if found then pop the number out of the
                slist else insert the number in appropriate position
 * @since   :   04/01/2019
 
 * @version :   1.0
 * @since   :   04/01/2019
 ***************************************************************************/
include '/home/bridgelabz/php programs/utilityForDataStructures/utilityForDataStructers.php';
/** 
 * enter the input number of nodes 
  */
echo "enter the number of nodes \n";
$number = utility::readInt();
/**
 * call to function factorial 
 */
$fact = utility::factorial($number);
$numerator = utility::factorial(2 * $number);
$denomirator = utility::factorial($number + 1) * utility::factorial($number);
/**
 *  calculate bst 
 */
$binarySearchTree = floor($numerator / $denomirator);
echo "number of nodes are possible are " . $binarySearchTree. "\n";
?> 