<?php
/*****************************************************************************************
 *purpose   :To the Util Class add dayOfWeek static function that takes a date as input and prints the day of the week

 * @file    :dayOfWeek.php
 * @overview:Your program should take three command-line arguments: m (month), d (day), and y (year). For m use 1 for January, 2 for February, and so forth. For output print 0 for Sunday, 1 for Monday, 2 for Tuesday,
 *           and so forth. Use the following formulas, for the Gregorian calendar (where / denotes integer division)
 * @author  :surendra
 * @version : 1.0
 * @since   : 28/01/2019
 **************************************************************************/
require 'utilityForAlgorithm.php';
/**
 * accessing the utility
 */
function day()
{
/**
 * creating week varaible
 */
    $weeks = array('sunday', 'monday', 'tuesday', 'wednessday', 'thursday', 'friday', 'saturday');
    /**
     * printing the date varaibles , month varaible and year varaible
     */
    try {
        echo "enter date";
        $date = Utility::readInt();
        $count = strlen($date);
        if ($date <= 0 || $count != 2) {
            throw new Exception("PLZ ENTER VALID DATE \n");
        }
        echo "enter year";
        $year = Utility::readInt();
        $count = strlen($year);
        if ($date <= 0 || $count != 4) {
            throw new Exception("PLZ ENTER VALID year\n ");
        }
        echo "enter month ";
        $month = Utility::readInt();
        $count = strlen($month);
        if ($date <= 0 || $count != 2) {
            throw new Exception("PLZ ENTER VALID month\n ");
        }
        $day = Utility::dayOfWeek($date, $month, $year);
        echo $weeks[$day];
/**
 * validating through try catch block
 */
    } catch (Exception $err) {
        echo "ERROR :" . $err->getMessage();
        day();
    }

}
day();
