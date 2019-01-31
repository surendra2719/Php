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
    public static function readArrayString(){
        return trim(fgets(STDIN));
    } 
}