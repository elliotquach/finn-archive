<?php
  /**
   * Output File for SAC Part 3 Task 2 - Print, Fold and Post Weight Manager
   *
   * Reads data from a file, then calculates and displays various 
   * pieces of information based on the data. 
   *
   * @author Finn O'Prey <finn@oprey.co>
   */

  // ***** Static Variables *****

  $FILE_NAME = '20220327-1234.txt';

  // ***** Functions *****

  /**
   * Finds the size of a letter based on its weight
   *
   * Checks the provided weight against each category
   * @param double $weight the weight of the letter
   *
   * @return string the name of the size category 
   */
  function find_letter_size($weight)
  {
    if ($weight <= 125) 
    {
      // Small
      return 'small';
    } 
    elseif ($weight <= 250)
    {
      // Medium
      return 'medium';
    }
    else
    {
      // Large
      return 'large';
    }
  }

  /**
   * Returns the postage cost of a letter based on its weight
   *
   * Finds the size category, then uses that to find cost
   * @param double $weight the weight of the letter
   *
   * @return double the cost of postage
   */
  function find_postage_cost($weight) 
  {
    $letter_size = find_letter_size($weight);

    if ($letter_size == 'small')
    {
      return 1.10;
    } 
    elseif ($letter_size == 'medium') 
    {
      return 2.20;
    }
    else 
    {
      return 3.30;
    }
  }

  /**
   * Calculaes the total cost of postage from a list of letters
   *
   * Iterates through array and calculates cost by 
   * adding individual costs to a total value.
   * @param array $array the list of weights
   *
   * @return double the total cost of postage
   */
  function find_total_postage_cost($array) 
  {
    $total = 0;
    foreach ($array as $weight) {
      // Add the curent cost to total
      $total += find_postage_cost($weight);
    }

    return $total;
  }

  /**
   * Returns the lowest value in an array
   *
   * Iterates through array and assigns the lowest
   * variable to the current value if it is lower
   * then the current lowest value.
   * @param array $array the list of values
   *
   * @return double the lowest value
   */
  function find_lowest($array) 
  {
    $lowest = $array[1];
    foreach ($array as $item) 
    {
      if ($item < $lowest) 
      {
        $lowest = $item;
      }
    }

    return $lowest;
  }

  /**
   * Returns the amount of weights that fall into a size category
   *
   * Iterates through the array, finding the size of
   * each value, and then adds 1 to a total count if
   * it is of the specified size.
   * @param array $weights the list of weights
   * @param string $size the size to be counted
   *
   * @return double the lowest value
   */
  function count_weights_of_size($weights, $size) {
    $count = 0;
    foreach ($weights as $weight) {
      if (find_letter_size($weight) == $size) 
      {
        $count+= 1;
      }
    }

    return $count;
  }

  /**
   * Identifies if a weight is valid and if 
   * it falls witin the valid range. 
   *
   * @param double $weight the weight to be validated
   *
   * @return boolean whether or not the weight is valid
   */
  function is_valid_weight($weight) {
    // Invalid if the weight is not a number.
    if (!is_numeric($weight)) 
    {
      return false;
    }
    // Invalid if the weight is outside the valid range.
    if (!($weight >= 1 && $weight <= 500)) 
    {
      return false;
    }

    // Return true otherwise.
    return true;
  }

  // ***** Main Program *****

  // Read the file specified in the FILE_NAME variable
  $file = file($FILE_NAME, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
  $letters = [];

  // Filter array to ensure all entries are valid.
  $letters = array_filter($file, 'is_valid_weight');

  fclose($file);

  // Calculate all the variables needed
  $letters_total = count($letters);
  $letters_small = count_weights_of_size($letters, 'small');
  $letters_medium = count_weights_of_size($letters, 'medium');
  $letters_large = count_weights_of_size($letters, 'large');
  $letters_lightest = find_lowest($letters);
  $letters_total_postage = number_format(find_total_postage_cost($letters), 2);

  // Echo out the values to the user
  echo '<strong>Letter counts for ' . $FILE_NAME . '</strong>';
  echo '<p>The total number of letters is ' . $letters_total . '</p>';
  echo '<p>The number of small letters is ' . $letters_small . '</p>';
  echo '<p>The number of medium letters is ' . $letters_medium . '</p>';
  echo '<p>The number of large letters is ' . $letters_large . '</p>';
  echo '<p>The lightest letter weighed ' . $letters_lightest . 'g</p>';
  echo '<p>The total postage charges are $' . $letters_total_postage . '</p>';

?>