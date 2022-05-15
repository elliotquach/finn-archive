<?php
  /**
   * Software Development Unit 3 - SAC Part 1 Task 2
   *
   * Defines, then displays the values 
   * and types of variables.
   *
   * @author Finn Scicluna-O'Prey <finn@oprey.co>
   * @license https://mit-license.org MIT
   */

  /** Assignment of variables based on provided booking data */
  $bookingId = 100456;
  $customerName = 'Sarah Lee';
  $totalCost = 23.85;
  $onlinePurchase = true;

  /** Displaying bookingId value and type */
  echo 'The booking id is ' . $bookingId . '<br>'; /** Include a break for new line */
  echo 'The data type for bookingId is ' . gettype($bookingId) . '<br>';

  /** Displaying customerName value and type */
  echo 'The customer name is ' . $customerName . '<br>';
  echo 'The data type for customerName is ' . gettype($customerName) . '<br>';

  /** Displaying totalCost value and type */
  echo 'The total cost is ' . $totalCost . '<br>';
  echo 'The data type for totalCost is ' . gettype($totalCost) . '<br>';

  /** Displaying onlinePurchase value and type */
  echo 'The booking was purchased online  ' . $onlinePurchase . '<br>';
  echo 'The data type for onlinePurchase is ' . gettype($onlinePurchase) . '<br>';
?>