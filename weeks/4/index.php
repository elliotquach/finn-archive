<?php
  // task 1a
  for ($i = 0; $i < 10; $i++) {
    echo $i;
  }

  // task 1b
  function bmi($weight, $height) {
    return $weight / ($height ** 2);
  }

  $people = [['Geoff', 67, 1.76], ['Barry', 72, 1.66], ['Mandy', 58, 1.82], ['Sarah', 65, 1.73]];

  for ($i = 0; $i < count($people); $i++) {
    $name = $people[$i][0];
    $weight = $people[$i][1];
    $height = $people[$i][2];

    $bmi = bmi($weight, $height);
    $classification;

    if ($bmi < 18.5) {
      $classification = 'underweight';
    } elseif ($bmi >= 18.5 && $bmi < 25) {
      $classification = 'normal weight';
    } elseif ($bmi >= 25 && $bmi < 30) {
      $classification = 'overweight';
    } else {
      $classification = 'obese';
    }

    echo $name . ' weighs ' . $weight . ' kilos and is ' . $height . ' metres tall. ';
    echo $name . '\'s BMI is ' . $bmi . ' which classifies them as ' . $classification;
    echo '<br>';
  }

  // task 2c
  $a = ['Red' => '#FF0000', 
        'White' => '#FFFFFF', 
        'Green' => '#008000', 
        'Blue' => '#0000FF'];
  $b = [22.7, 28.5, 22.1];

  echo '<h2>Array A</h2>';
  foreach($a as $key => $value) {
    echo 'Key: ' . $key . ', Value: ' . $value;
    echo '<br>';
  }

  echo '<h2>Array B</h2>';
  for ($i = 0; $i < count($b); $i++) {
    echo 'Key: ' . $i . ', Value: ' . $b[$i];
    echo '<br>';
  }
