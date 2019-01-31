<?php
/*****************************************************************************************
 *purpose   : it wiil providing method accessing for primetwod program
 * @file    : primeTwodChecker.js
 * @overview: Reading methods for primetwod
 * @author  : surendra 
 * @version : 1.0
 * @since   : 04/01/2019 
 ***************************************************************************/
include '/home/bridgelabz/php programs/utilityForDataStructures/utilityForDataStructers.php';

require ("/home/bridgelabz/php programs/utilityForDataStructures/queue.php");
echo "enter the number \n";
/**
 * taking number by user input
 */
$number = Utility::readInt();
/**
 * function to get prime number in arrays 
*/
$primeArray = Utility::primeNumberArray($number);
/**
 *  function to get primes that are anagram 
*/
$primeAnagram = Utility::printPrimeAnagram($primeArray);
/**
 * create new queue 
 */
$queue = new Queue;
/**
 * add prime anagram array to queue  
 */
for ($i = 0; $i < sizeof($primeAnagram); $i++) {
    $queue->enqueue($primeAnagram[$i]);
}
echo "Queue prime Anagram\n";
$queue->display();
?>