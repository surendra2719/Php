<?php 
/*****************************************************************************************
 *purpose   :  Write a program to read in Stock Names, Number of Share, Share Price. 
               Print a Stock Report with total value of each Stock and the total value of Stock.
 * @file    : stockRepor.php
 * @overview:  N number of Stocks, for Each Stock Read In the Share Name, Number of Share, and Share Price
               Calculate the value of each stock and the total valuePrint the Stock Report. Create Stock and Stock Portfolio Class holding the list of Stocks read from the input file. 
               Have functions in the Class to calculate the value of each stock and the value of total stocks
 * @author  : surendra
 * @version : 1.0
 * @since   : 28/01/2019 
 **************************************************************************/
include ('/home/bridgelabz/php programs/oops/utility.php');
require ('/home/bridgelabz/php programs/oops/stock.php');
class StockReport extends Stock{
    function print($file){
        $stck = new Stock();
        echo "enter number of stocks\n";
        $no = utility::readInt();
        for($i=0;$i<$no;$i++){
            echo "enter the stock name\n";
            $stName = utility::readString();
            $stck->setStockName($stName);
            echo "enter the number of shares \n";
            $noShares = utility::readInt();
            $stck->setNoShare($noShares);
            echo "enter the share price\n";
            $sharePrice = utility::readInt();
            $stck->setPrice($sharePrice);
            $obj[] = array('stock name'=>$stName,'no of shares'=>$noShares,'share price'=>$sharePrice);
            $jData = json_encode($obj);
            $jStr = file_put_contents($file,$jData);
            
          
        }
    }
        function readJson($file){
            $fileStr = file_get_contents($file);
            $jsonData = json_decode($fileStr,true);
            return $jsonData;
        }
        function printReport($jsondata){
            echo "STOCK REPORT\n\n";
            foreach($jsondata as $stock){
                $name = $stock['stock name'];
                $weight = $stock['no of shares'];
                $price = $stock['share price'];
                printf('Name : %s '."\t".'number of shares : %d'."\t". 'price : %d '."\t".'value : %d  '.PHP_EOL, $name,$weight,$price, $weight*$price);
            }
        }
        
    
    
}
$stckReport = new StockReport();
$file = "stock.json";
$stckReport->print($file);
$data = $stckReport->readJson($file);
$stckReport->printReport($data);
?>