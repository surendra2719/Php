<?php
/*****************************************************************************************
 *purpose   : To the Util Class add temperaturConversion static function, given the temperature in 
              fahrenheit as input outputs the temperature in Celsius or viceversa using the formula
 * @file    : tempConversion.php
 * @overview:  To the Util Class add temperaturConversion static function, given the temperature in 
              fahrenheit as input outputs the temperature in Celsius or viceversa using the formula
 * @author  : surendra
 * @version : 1.0
 * @since   : 28/01/2019
 **************************************************************************/
/**
 * acessing the util
 */
include 'utilityForAlgorithm.php';
/**
 * taking input by user and print
 */
echo "enter the choice 1:celcuis to farenheit 2:Fahrenheit to Celsius \n";
$choice = Utility::readInt();
/**
 * function convert tempeature from farentoheit-><-celcuis
 */
Utility::tempConverstation($choice);
?>