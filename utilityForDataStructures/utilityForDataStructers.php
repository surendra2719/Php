<?php

class utility{
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
 public static function binarySearchTree() {
        try { //validation
             echo("Enter the total number of test cases");
             $number =  utility::readInt();
            // user have to give these test cases 
            if (is_nan($number)) 
             throw new Exception( "PLZ ENTER INTEGER VALUE");
            $array = []; //  declaring empty array vbaraible 
            echo ("Enter your integers");
            // user have to give integer 
            for ( $i = 0; $i <$number; $i++)
            // generating loop for array 
            {
               //arr[i] = readline.question(' ');
               fscanf(STDIN,"%s\n",$array[$i]);
            }
            for ( $i = 0; $i <$number; $i++)
            // generating loop for array 
            {
               //arr[i] = readline.question(' ');
              // fscanf(STDIN,"%s\n",$array[$i]);
               echo $array[$i];
            }
           

             $first; //  declaring first varaible 
             $second; // declaring second varaible 
            for ( $j = 0; $j <sizeof($array); $j++)  // generating for loop for integers
            {
                // formula for first varaible 
                 $first = (factorial(2 * number_format(($array($j)))));
                // formula for second varaible
                 $second = number_format((factorial(number_format($array($j) + 1))) * (factorialnumber_format(arr($j))));
                // declaring result varaible 
                 $result = floor(($first / $second));
                // printing the result value 

                echo ("The total number of Node required for ".  array($j) . " is " . $result);
            }
        } catch (Exception $err) {
            echo "ERROR :" . $err->getMessage();
        
        }
    
    }
  public static function  factorial($number) {// factorial method 
        if ($number > 0) {

            if ($number == 0 || $number == 1) {  // checking number
                return 1;
            }
            // formula for factorial 
            return $number *utility::factorial($number - 1);

        }
    }

}
?>