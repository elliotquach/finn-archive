<?php
  /**
   * Software Development Unit 3 - SAC Part 1 Task 1
   *
   * Calculates the price of a ticket after
   * a discount has been applied, and displays
   * it on the screen using echo.
   *
   * @author Finn Scicluna-O'Prey <finn@oprey.co>
   * @license https://mit-license.org MIT
   */

  /**
   * Returns the discounted ticket price
   *
   * Calculates the price by multiplying the cost
   * by the discount percentage divided by 100.
   * 
   * @param float $ticketCost
   * @param float $discount
   *
   * @return float $totalCost being the discounted ticket price 
   */
  function calculateTicketPrice($ticketCost, $discount) 
  {
    $ticketDiscount = $ticketCost * ($discount / 100);
    $totalCost = $ticketCost - $ticketDiscount;
    return $totalCost;
  }


  /** Basic implementation of the function with example values */ 
  $ticketPrice = calculateTicketPrice(16, 10);
  /** Displaying the resulting price */
  echo 'The ticket price is '. $ticketPrice;
?>