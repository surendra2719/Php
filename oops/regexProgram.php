<?php
/*****************************************************************************************
 *purpose   : Read in the following message: Hello <<name>>, We have your full name as <<full name>> in our system.
your contact number is 91-xxxxxxxxxx. Please,let us know in case of any clarification Thank you BridgeLabz 01/01/2016.
 * @file    : regexProgram.php
 * @overview: Use Regex to do the followingReplace <<name>> by first name of the user ( assume you are the user) replace <<full name>> by user full name.
replace any occurance of mobile number that should be in format 91-xxxxxxxxxx by your contact number.replace any date in the format XX/XX/XXXX by current date.
Print the Modified Message.
 * @author  : surendra
 * @version : 1.0
 * @since   : 28/01/2019
 **************************************************************************/
/**
 * acesing the utility
 */
include '/home/bridgelabz/php programs/oops/utility.php';
/**
 * decalaring hte string varaible
 */
$string = "Hello <<name>>,\nWe have your full name as <<full name>> in our system.\n" .
    "your contact number is 91-xxxxxxxxxx\n" .
    "Please,let us know in case of any clarification.\n" .
    "Thank you BridgeLabz 01/01/2016";
/**
 * taking user input  replacing with preg_replace  printing the string
 */
echo "Enter name: ";
$name = Utility::readString();
$string = preg_replace("/<<name>>/", $name, $string);
echo "Enter Full Name: ";
$fullName = Utility::readArrayString();
$string = preg_replace("/<<full name>>/", $fullName, $string);
echo "Enter your mobile Number: ";
$moblieNumber = Utility::readInt();
$string = preg_replace("/91-xxxxxxxxxx/", $moblieNumber, $string);
$date = date("d/m/Y");
$string = preg_replace("/01\/01\/2016/", $date, $string);
if ($string == true) {
    echo $string . "\n";
}
return;
