<?php
/*****************************************************************************************
 *purpose   : Get JSON Object in Java or NSDictionary in iOS. Create Inventory Object from JSON. Calculate the value for every Inventory.
 * @file    : inventory.php
 * @overview: Get JSON Object in Java or NSDictionary in iOS. Create Inventory Object from JSON.
Calculate the value for every Inventory.
 * @author  : surendra
 * @version : 1.0
 * @since   : 28/01/2019
 **************************************************************************/
include '/home/bridgelabz/php programs/oops/invent.json';
include '/home/bridgelabz/php programs/oops/utility.php';

interface inventor
{

    public function invent($object);
    //public function read();
}

class inventoryManagement implements inventor
{

    public function invent($object)
    {
        // inventory method
        /**
         *  declaring varaibles and definig with object
         */
        //$object['object1'] = $GLOBALS['object'];
        echo "\nInventory Details-->\n";
        echo "1: Rice\n";
        echo "2: Wheat\n";
        echo "3: Pulses\n";
        /*
         * enter choices to select inventory
         */
        echo "Please enter your choice: ";
        $item = utility::readInt();
        /*
         * parse option to integer only
         */
        switch ($item) {
            case 1:
                // echo"in switch";
                echo "\nPlease enter the weight of rice you want to purchase: \n";
                $weight = (int) utility::readInt();

                // if (!is_numeric($weight)) {
                var_dump($object);
                for ($i = 0; $i < count($object->Rice); $i++) {
                    /*
                     * calculate total and prints
                     */
                    echo "\nPer Kg. of " . $object->Rice[$i]->name . " costs " . $object->Rice[$i]->price . " and for " . $object->Rice[$i]->weight . " Kgs. costs :" . $object->Rice[$i]->weight * $object->Rice[$i]->price . "\n";
                }
                // }
                break;
            case 2:
            echo "\nPlease enter the weight of rice you want to purchase: \n";
            $weight = (int) utility::readInt();

                if (!is_numeric($weight)) {
                    for ($i = 0; $i < count($object->Wheats); $i++) {
                        /*
                         * calculate total and print
                         */
                        echo "\nPer Kg. of " . $object->Wheats[$i]->name . " costs " . $object->Wheats[$i]->price . " and for " . $object->Rice[$i]->weight . " Kgs. costs: " . $object->Rice[$i]->weight * $object->Wheats[$i]->price . "\n";
                    }
                }
                break;
            case 3:
            echo "\nPlease enter the weight of rice you want to purchase: \n";
            $weight = (int) utility::readInt();

                if (!is_numeric($weight)) {
                    for ($i = 0; $i < count($object->Pulses); $i++) {
                        /*
                         * calculate total and print
                         */
                        echo "\nPer Kg. of " . $object->Pulses[$i]->name . " costs " . $object->Pulses[$i]->price . " and for " . $object->Rice[$i]->weight . " Kgs. costs: " . $object->Rice[$i]->weight * $object->Pulses[$i]->price . "\n";
                    }
                }
                break;
            /**
                 * validating a number item
                 */
            default:
                echo "Please select a valid item!!";
        }
    }
}
 function read()
{
    $file = file_get_contents('invent.json');
    $object = json_decode($file);
    return $object;
}

$obj = new inventoryManagement;
$ob = read();
echo "read";
$obj->invent($ob);
