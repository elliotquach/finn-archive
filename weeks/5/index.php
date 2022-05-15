<?php 
  // task 1b
  
  // draw no, date, num 1, num 2, num 3, num 4, num 5, supp num
  $draws = [
    [45, strtotime('2020-03-07'), [22, 33, 23, 4,  14, 7]], 
    [46, strtotime('2020-03-14'), [34, 35, 23, 12, 18, 31]], 
    [47, strtotime('2020-03-21'), [6,  13, 16, 44, 41, 16]], 
    [48, strtotime('2020-03-28'), [16, 1,  8,  17, 32, 2]], 
    [49, strtotime('2020-04-04'), [29, 8,  25, 19, 21, 4]]];

  foreach ($draws as $draw) 
  {
    $number = $draw[0];
    // format date into 2022-03-29 like format
    $date = date('Y-m-d', $draw[1]);
    $drawnNumbers = $draw[2];

    // join numbers with commas for better readability
    $joinedNumbers = join(', ', $drawnNumbers);

    echo 'Draw number ' . $number . ' on date ' . $date . ' has numbers ' . $joinedNumbers;
    echo '<br>';
  }

  // task 2b
  $i = 0;
  while ($i < 10) 
  {
    $i++;
    echo $i . '<br>';
  }

  // task 2c
  $temperatures = [
    [strtotime('2021-02-12'), 23.3], 
    [strtotime('2021-02-14'), 20.08], 
    [strtotime('2021-02-15'), 20], 
    [strtotime('2021-02-13'), 24.6], 
    [strtotime('2021-02-16'), 31.3], 
    [strtotime('2021-02-17'), 28.8], 
    [strtotime('2021-02-18'), 31.8], 
    [strtotime('2021-02-19'), 32.6], 
    [strtotime('2021-02-20'), 23.8], 
    [strtotime('2021-02-21'), 20.6], 
    [strtotime('2021-02-22'), 21.8], 
    [strtotime('2021-02-23'), 19.2], 
    [strtotime('2021-02-24'), 20.2], 
    [strtotime('2021-02-25'), 24.3]];

  function displayTemperature($date, $temp) 
  {
    $formattedDate = date('Y-m-d', $date);
    echo 'On ' . $formattedDate . ', the temperature is ' . $temp;
  }

  foreach ($temperatures as $temperature) 
  {
    $date = $temperature[0];
    $temp = $temperature[1];
    if ($temp < 20 || ($temp > 22 && $temp < 32)) 
    {
      displayTemperature($date, $temp);
      echo '<br>';
    }
  }
?>