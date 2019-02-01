<?php
/*****************************************************************************************
 *purpose   :  Write a program to read in Stock Names, Number of Share, Share Price. 
               Print a Stock Report with total value of each Stock and the total value of Stock.

 * @file    :  stockExpression.php
 * @overview:  N number of Stocks, for Each Stock Read In the Share Name, Number of Share, and Share Price
               Calculate the value of each stock and the total valuePrint the Stock Report. Create Stock and Stock Portfolio Class holding the list of Stocks read from the input file. 
               Have functions in the Class to calculate the value of each stock and the value of total stocks
 * @author  : surendra
 * @version : 1.0
 * @since   : 28/01/2019 
 **************************************************************************/
include '/home/bridgelabz/php programs/oops/json/stockExpression.json';
interface stock
{
    public function stockExpression($data);
}

class stockA implements stock
{
    public function stockExpression($file)
    {
        $stock = $file->stock;
        /**
         * declaring varaible and through that varaible accessing the stock
         */
        for ($key = 0; $key < count($stock->stock); $key++) {
            /*
             * for in loop it will through the properties of stock objects
             */
            echo $stock[$key];
            echo ("The total value of " . $stock[$key]->stock_Name . " is " . $stock[$key]->number_Of_Shares * $stock[$key]->share_Price);
            /*
            calculating the different type of stocks  through number of shares and share prices price and printing the result
             */
            echo ('\n');
        }
        $newStock = 0;
        for ($key = 0; $key < count($stock->stock); $key++) {
            $newStock = (int) ($newStock) . (int) ($stock[$key]->number_Of_Shares * $stock[$key]->share_Price);
        }
        echo ("The total value of all stocks are  ".$newStock);

    }
}
 function read()
{
    $file = file_get_contents('/home/bridgelabz/php programs/oops/json/stockExpression.json');
    $stock = json_decode($file);
    return $stock;
}

$object = new stockA;
$ob = read();
$object->stockExpression($ob);
