<?php

class utility
{
    public static function readString()
    {
        $var = readline("");
        while (is_numeric($var)) { /**if input is numeric then throw error */
            echo "enter valid input ";
            fscanf(STDIN, "%s", $var);
        }
        return $var;
    }
    public static function readInt()
    {
        fscanf(STDIN, "%s", $i);
        while (!is_numeric($i) || $i > (int) $i) {
            /**if input is numeric or decimal  */
            echo "enter valid input";
            fscanf(STDIN, "%s", $i);
        }
        return $i;
    }
/**  to read float values
 *@return double value
 */
    public static function readDouble()
    {
        fscanf(STDIN, "%s\n", $val);
        while (!is_float($val)) {
            echo "ivalid input try again\n";
            fscanf(STDIN, " %f\n ", $val);
        }
        return $val;
    }
/**read flaot values
 * @return float value
 */
    public static function readFloat()
    {
        fscanf(STDIN, "%f\n", $val);
        while (!is_float($val)) {
            echo "ivalid input try again\n";
            fscanf(STDIN, " %f\n ", $val);
        }
        return $val;
    }
    public static function binarySearchTree()
    {
        try { //validation
            echo ("Enter the total number of test cases");
            $number = utility::readInt();
            // user have to give these test cases
            if (is_nan($number)) {
                throw new Exception("PLZ ENTER INTEGER VALUE");
            }

            $array = []; //  declaring empty array vbaraible
            echo ("Enter your integers");
            // user have to give integer
            for ($i = 0; $i < $number; $i++)
            // generating loop for array
            {
                //arr[i] = readline.question(' ');
                fscanf(STDIN, "%s\n", $array[$i]);
            }
            for ($i = 0; $i < $number; $i++)
            // generating loop for array
            {
                //arr[i] = readline.question(' ');
                // fscanf(STDIN,"%s\n",$array[$i]);
                echo $array[$i];
            }

            $first; //  declaring first varaible
            $second; // declaring second varaible
            for ($j = 0; $j < sizeof($array); $j++) // generating for loop for integers
            {
                // formula for first varaible
                $first = (factorial(2 * number_format(($array($j)))));
                // formula for second varaible
                $second = number_format((factorial(number_format($array($j) + 1))) * (factorialnumber_format(arr($j))));
                // declaring result varaible
                $result = floor(($first / $second));
                // printing the result value

                echo ("The total number of Node required for " . array($j) . " is " . $result);
            }
        } catch (Exception $err) {
            echo "ERROR :" . $err->getMessage();

        }

    }
    public static function factorial($number)
    { // factorial method
        if ($number > 0) {

            if ($number == 0 || $number == 1) { // checking number
                return 1;
            }
            // formula for factorial
            return $number * utility::factorial($number - 1);

        }
    }

    public static function checkLeapYear($year)
    {
        /**year must 4 digits */
        while ($year < 999 && $year < 10000) {
            echo "enter valid year must be 4 digit \n";
            $yearr = Utility::readInt();
            Utility::checkLeapYear($year);
        }
        $flag = false;
        /**divided by 400 or 4 then it is leap year else not  */
        if ($year % 400 == 0) {
            $flag = true;
        } else if ($year % 100 == 0) {
            $flag = false;
        } else if ($year % 4 == 0) {
            $flag = true;
        }
        if ($flag) {
            echo "leap year \n";
        } else {
            echo "not a leap year \n";
        }
    }
    public static function dayOfWeek($date, $month, $year)
    {
        /**
         *Formulas for caluclating dayofWeek
         */

        $yearOne = floor($year - (14 - $month) / 12) + 1;
        $x = floor($yearOne + $yearOne / 4 - $yearOne / 100 + $yearOne / 400);
        $monthOne = ($month + 12 * floor(((14 - $month) / 12)) - 2);
        $dateOne = floor(($date + $x + floor((31 * $monthOne) / 12)) % 7);
        return $dateOne;

    }
    public static function isPrime($number) // prime method for checking number is prime or not

    {
        if ($number == 0 || $number == 1) //  checking the number
        {
            return false;
        }
        for ($index = 2; $index < $number; $index++) // generating for loop for number
        {
            if ($number % $index == 0) {
                return false;
            }

        }
        return true;
    }

    public static function primeNumberArray($n)
    {
        $prime = 2;
        $primeArray = array();
        $count = 0;
        while ($prime < $n) {
            $flag = true;
            for ($i = 2; $i <= $prime / 2; $i++) {
                if ($prime % $i == 0) {
                    $flag = false;
                    break;
                }
            }
            if ($flag == true) {
                $primeArray[$count] = $prime;
                $count++;
            }
            $prime++;
        }
        return $primeArray;
    }
    public static function printPrimeAnagram($prime)
    {
        $primeAnagram = array();
        /**
         * intitalizing array
         */
        $count = 0;
        for ($i = 0; $i < sizeof($prime); $i++) {
            for ($j = $i + 1; $j < sizeof($prime); $j++) {
                if (Utility::isPrimeAnagram("$prime[$i]", "$prime[$j]") == true) { //check two index are anagram
                    $primeAnagram[$count] = $prime[$i]; // if true then add to array
                    $count++;
                    $primeAnagram[$count++] = $prime[$j];
                }
            }
        }

        $temp = array_unique($primeAnagram);
        /**
         * removes duplicate values
         */
        $new_array = array_values($temp);
        /**
         * moving value to new array
         */

        return $new_array;
    }
    public static function isPrimeAnagram($str1, $str2)
    {
        /**
         * split the string
         */
        $tempStr1 = str_split($str1);
        $tempStr2 = str_split($str2);
        /**
         * sort the string
         */
        asort($tempStr1);
        asort($tempStr2);
        /**
         * check size of two array are equal
         */
        if (sizeof($tempStr1) == sizeof($tempStr2)) {
            /**
             * converting to string
             */
            $anaStr1 = implode("", $tempStr1);
            $anaStr2 = implode("", $tempStr2);

            /**
             * if both are equal then anagram
             */
            if ($anaStr1 == $anaStr2) {
                return true;
            }
        } else {
            return false;
        }
    }
}
