<?php
  /**
   * Form Handler for SAC Part 3 Task 1 - Print, Fold and Post Letter Weight Manager
   *
   * Validates user inputs of client id and weight with checks
   * of existance range and type - then saves the data to a file.
   *
   * @author Finn O'Prey <finn@oprey.co>
   */

  // ***** Functions *****

  /**
   * Validates whether or not a value exists in a post request
   *
   * Checks if each value exists in post variable and if it's empty
   * @param string $name the name of the value to be checked
   *
   * @return boolean whether or not the value is valid 
   */
  function validate_post($name) 
  {
    if (isset($_POST[$name]) && !empty($_POST[$name])) 
    {
      return true;
    } 
    else 
    {
      return false;
    }
  }

  /**
   * Exits the program after sending a formatted error message
   *
   * Echo's formatted elements and then runs the exit function.
   * @param string $message the error message to be included
   */
  function exit_with_error($message) 
  {
    echo '<h2 style="color: red;">Error!</h2>';
    echo '<p>' . $message . '</p>';
    exit();
  }

  // ***** Main Program *****

  /** Check that the form has been submitted */
  if ($_SERVER['REQUEST_METHOD'] == 'POST')
  {
    /** EXISTANCE CHECKING */

    if (!validate_post('client_id')) 
    {
      exit_with_error('Please enter a client id.');
    }

    if (!validate_post('letter_weight')) 
    {
      exit_with_error('Please enter a letter weight.');
    }

    // Set variables now that we know they exist
    $client_id = $_POST['client_id'];
    $letter_weight = $_POST['letter_weight'];

    /** TYPE CHECKING */

    if (!is_numeric($client_id)) 
    {
      exit_with_error('The client id must be a numeric value.');
      return;
    }

    if (!is_numeric($letter_weight)) 
    {
      exit_with_error('The letter weight must be a numeric value.');
      return;
    }

    // Cast the variables to numbers
    $client_id = (double) $client_id;
    $letter_weight = (double) $letter_weight;

    /** RANGE CHECKING */

    if (!($client_id >= 1 && $client_id <= 9999)) 
    {
      exit_with_error('The client id must be between 1 and 9999.');
      return;
    }

    if (!($letter_weight >= 1 && $letter_weight <= 500)) 
    {
      exit_with_error('The letter weight must be between 1 and 500 (grams).');
      return;
    }

    // Generate the date and create the file path
    $formatted_date = date('Ymd');
    $file_path = './data/' . $formatted_date . '_' . $client_id . '.txt';

    // Add the letter weight to the file, and create one if needed
    $file = fopen($file_path, 'a');
    fwrite($file, $letter_weight . PHP_EOL);
    fclose($file);

    echo '<h2 style="color: green;">Hooray!</h2>';
    echo '<p>Your data has been saved to <strong>' . $file_path . '</strong></p>';
    echo '<a href="./">Go back to form</a>';
  }
?>