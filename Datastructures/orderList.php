<?php
/*****************************************************************************************************************
 * overview  : Read a List of Numbers from a file and arrange it ascending Order in a
 *              Linked List. Take user input for a number, if found then pop the number out of the
 *              list else insert the number in appropriate position
 * Purpose   :  Read from file the list of Numbers and take user input for a new number
 * @filename : orderList.php
 * @author   : surendra
 * @version  : 1.0
 * @since    : 28-01-2019
 ********************************************************************************************************************/
include '/home/bridgelabz/php programs/utilityForDataStructures/utilityForDataStructers.php';
include '/home/bridgelabz/php programs/utilityForDataStructures/linkedList.php';
/**
 * create new linked list
 */
$linkedList = new LinkedList;
/**
 *  set file name
 */
$path = '/home/bridgelabz/php programs/Datastructures/number.txt';
/**
 *  open file with read operation
 */
$file = fopen("$path", "r");
/**
 * store data present in file
 */
$fileStr = fgets($file);
/**
 * convert string to array
 */
$fileArr = explode(" ", $fileStr);
sort($fileArr);
/**
 *  add data to linked list from array
 */
for ($i = 0; $i < sizeof($fileArr); $i++) {
    $linkedList->add($fileArr[$i]);
}
$linkedList->display();
echo "\n enter the element to search \n";
/**
 * enter element to search
 */
$key = Utility::readInt();
/**if it is present in linked list then remove the element else add to linkedlist */
if ($linkedList->search($key)) {
    $linkedList->remove($key);
    echo $key . " removed\n";
    $key = array("");
    asort($key);
    $linkedList->display();
} else {
    $linkedList->add($key);
    $key = array("");
    asort($key);
    $linkedList->display();
    echo "file updated\n";

}
$data = $linkedList->getData();
$new = explode(" ", $data);
/**
 * open file with write operation
 */
$file2 = fopen("$path", "w");
/**
 * there is error in opening file if it is false
 */

if ($file2 == false) {
    echo ("Error in opening new file");
    exit();
}
/**
 *  write the data present in linked list
 */
$fileW = fwrite($file2, $data);
/**
 * close the file
 */
fclose($file2);
