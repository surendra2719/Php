<?php
/*****************************************************************************************
 *purpose   : Panel to add People to Queue to Deposit or Withdraw Money and dequeue
Write a Queue Class to enqueue and dequeue people to either deposit or withdraw money
and maintain the cash balance

 * @file    : cashCounter.js
 * @overview:  Create a Program which creates Banking Cash Counter where people come in to deposit Cash and withdraw Cash.
Have an input panel to add people to Queue to either deposit or withdraw money
and dequeue the people. Maintain the Cash Balance.
 * @version : 1.0
 * @since   : 04/01/2019
 ***************************************************************************/
require ("/home/bridgelabz/php programs/utilityForDataStructures/queue.php");
include '/home/bridgelabz/php programs/utilityForDataStructures/utilityForDataStructers.php';
function queue() // method for queue
{
  
    $que = new Queue; //  accesing  functions queue class
    $put = []; // declaring array
    $totalmoney = 1000; // intializing the totalmoney
    $flag = true; // checking boolean condition with varaible flag
    echo ("Enter the total number of transactions  :"); //  inform vraible through user input
    $inform = utility::readInt();
    if ($inform > 0)
    // if condition checking the providing  an inform should be greater than zero or not
    {
        for ($i = 1; $i <= $inform; $i++) // for loop for itirating the inform varaible
        {
            echo ("Enter 1 to deposit the money\nEnter 2  to withdraw the money \n ");

            //  declaring a numbers one and two for users choice
            $answer = utility::readInt();
            if ($answer == 1) // by user choice one it will enter into loop
            {
                echo ("Enter total amount for Depositing  money into the account :\n");
                $amount = utility::readInt();
                // reading amount varaible for deposting money
                $put = $que->enqueue(number_format($amount));
                // accessing enque method from queue claas
            } else if ($answer == 2) // by user choice two it will enter into loop
            {
                echo ("Enter total amount for Withdrawing money into account  :\n");
                $amount = utility::readInt();
                // reading amount varaible for withdrawing money
                $get = $que->enqueue(number_format(-$amount));
                // accessing enque method from queue claas
                $flag = true; // checking flag along with boolean condition
            } else {
                echo (" your key  should be correct "); // checking flag along with boolean condition

                $flag = false; // checking flag along with boolean condition
                return;
            }
        }

    } else {
        echo ("please enter valid input "); //checking the input it should be in correct form
        return;
    }
    if ($flag) // checking the flag vraible with if condition
    {    
        $sum = 0; // declaring sum vraible
        for ($i = 1; $i <= $inform; $i++) // adding sum variable with amount (deque or enqeue)
        {
            $sum = ($sum + $que->dequeue());
        }
        $totaltransaction = $totalmoney + $sum; // declaring varaible for someup with total with sum varaible
        echo ("At the end of the day Total money left in the bank " . $totaltransaction);
        if ($totaltransaction < $totalmoney) //  checking the money with if conditions
        {
            echo ("money in bank not maintained");
        } else {
            echo ("Money in bank maintained");
        }

    }
}

queue();
