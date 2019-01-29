<?php
/*****************************************************************************************
 *purpose   :Take a range of 0 - 1000 Numbers and find the Prime numbers in that range.

 * @file    : prime.php
 * @overview: find the Prime numbers in given range.
 * @author  : surendra
 * @version : 1.0
 * @since   : 28/01/2019
 **************************************************************************/
{
/**
 * accessing util
 */
    include 'utilityForAlgorithm.php';
    echo "enter the number ";
    $number = Utility::readInt();
/**
 * taking the user input and printinig the generated array through for loop
 */
    $primeArray = Utility::primeNumberArray($number);
    for ($k = 0; $k < sizeof($primeArray); $k++) {
        echo $primeArray[$k] . " ";
    }
}
