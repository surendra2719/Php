<?php
/**     
 * Purpose     :   Reads in strings from standard input and prints them in sorted order Uses insertion sort
 *                  read the string from file and print them in a sorted order
 * description :    read the string from file and print them in a sorted order
 * filename    :    insertionSort.php
 * @author     :    surendra
 * @version    :    1.0
 * @since      :    28/01/2019
 ***************************************************************************************************************/
include 'utilityForAlgorithm.php';
/**
 * set path of file 
 */
$path = "words.txt";
/**
 * read the file 
 */
$file = fopen($path, "r");
$filestr = fgets($file);
/**
 * convert string to array 
 */
$str = explode(",", $filestr) or die("file not found");
for ($i = 0; $i < sizeof($str); $i++) {
    echo $str[$i] . " ";
    echo " \n";
}
echo "\n";
/**
 * function to perform insertion sort on file of int
 */
Utility::insertionSortFile($str);
?>