<?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name_first = $_POST['name_first'];
    $name_last = $_POST['name_last'];
    $email = $_POST['email'];
    $email_type = $_POST['email_type'];
    $date_of_birth = $_POST['date_of_birth'];

    if(!isset($name_first) || $name_first == null) {
      echo 'First name was not provided!<br>';
      echo '<a href="/weeks/8">Go back</a>';
      return;
    } else if(!isset($name_last) || $name_last == null) {
      echo 'Last name was not provided!<br>';
      echo '<a href="/weeks/8">Go back</a>';
      return;
    } else if(!isset($email) || $email == null) {
      echo 'Email was not provided!<br>';
      echo '<a href="/weeks/8">Go back</a>';
      return;
    } else if(!isset($email_type) || $email_type == null) {
      echo 'Email type was not provided!<br>';
      echo '<a href="/weeks/8">Go back</a>';
      return;
    } else if(!isset($date_of_birth) || $date_of_birth == null) {
      echo 'Date of birth was not provided!<br>';
      echo '<a href="/weeks/8">Go back</a>';
      return;
    }

    $data = [];
    $file = fopen('users.csv', 'r+');

    while(!feof($file)){
      $data[] = fgetcsv($file);
    }

    fputcsv($file, [$name_first, $name_last, $email, $email_type, $date_of_birth], ',');
    fclose($file);

    echo '<p>Thanks ' . $name_first . '! Your data has been saved.<p>';
    echo '<a href="/weeks/8">Go back</a>';
  }
?>