<?php
class Utility
{

/**function to read string
 *@return String value */
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
    public static function anagram($stringOne, $stringTwo)
    {
        /**
         * check length of two string are equal and split to array and sort array by values
         */
        if (count($stringOne) == count($stringTwo)) {
            $stringOneArray = str_split($stringOne);
            $stringTwoArray = str_split($stringTwo);
            asort($stringOneArray);
            asort($stringTwoArray);
            /**
             *check both string are equal and check both string are equal

             */
            $stringThree = implode("", $stringOneArray);
            $stringFour = implode("", $stringTwoArray);
            if ($stringThree == $stringFour) {
                echo "Anagram \n";
            }

        } else {
            echo "Not Anagram";
        }
    }

    public static function getStringArray()
    {
        return trim(fgets(STDIN));
    }
    public static function arrayInput($array)
    {
        echo ("enter the size");
        $number = utility::readInt();
        {
            for ($i = 0; $i < sizeof($number); $i++) {
                echo $array(i) . ("");
            }
            return $array;
        }

    }
    public static function primeNumberArray($number)
    {
        $prime = 2;
        $primeArray = array();
        $count = 0;
        /**
         * checking the number give user through generating for loop for prime numbers
         */
        while ($prime < $number) {
            $flag = true;
            for ($i = 2; $i <= $prime / 2; $i++) {
                if ($prime % $i == 0)
                /**
                 * checking the prime through if condition
                 */
                {
                    $flag = false;
                    break;
                }
            }
            if ($flag == true) {
                $primeArray[$count] = $prime;
                $count++;
                /**
                 * count incremented if flag were true
                 */
            }
            $prime++;
        }
        return $primeArray;
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

        public static function tempConverstation($choice)
        {
            switch ($choice) {
                /**
                 * celcuis to farenheit 
                 */
                case 1:echo "enter the value of celcuis\n";
                    $celcius = Utility::readFloat();
                    $farenheit = ($celcius * 9) / 5 + 32;
                    echo "celcius to farenheit  " . $farenheit . "\n";
                    break;
                /**
                 * farenheit to celcius 
                 */
                case 2:echo "enter the value of farenheit\n";
                    $farenheit = Utility::readFloat();
                    $celcius = (($farenheit - 32) * 5) / 9;
                    echo "farenheit to celcuis  " . $celcius . "\n";
                    break;
                default:
                    echo "invalid choice\n";
            }
        }
        public static function insertionSortFile($arr)
        {
            /**taking next element as key and comparing with cother in every loop */
            for ($i = 1; $i < sizeof($arr); $i++) {
                $key = $arr[$i];
                $j = $i - 1;
                while ($j >= 0) {
                    if (strcmp($arr[$j], $key) < 0) {
                        break;
                    }
                    $arr[$j + 1] = $arr[$j];
                    $j--;
                }
                $arr[$j + 1] = $key;
            }
            echo "after sorting \n";
            /**print array */
            for ($i = 0; $i < sizeof($arr); $i++) {
                echo $arr[$i] . " ";
            }
        }
        public static function printPrimeAnagram($prime)
        {  
            /**
             * INTIALIZING ARRAY
             */
            $primeAnagram = array(); 
            $count = 0;
            for ($i = 0; $i < sizeof($prime); $i++) {
                for ($j = $i + 1; $j < sizeof($prime); $j++) {
                    if (Utility::isPrimeAnagram("$prime[$i]", "$prime[$j]") == true) { 
                        $primeAnagram[$count] = $prime[$i]; 
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
}
?>