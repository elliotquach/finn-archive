<?php
  class Truck {
    public $make;
    public $year;
    public $size;
    public $colour;
    public $fuelType;

    private $currentActivity = "Stopped";

    function drive() {
      echo "Driving";
      $currentActivity = "driving";
    }

    function stop() {
      echo "Stopping";
      $currentActivity = "stopped";
    }

    function honk() {
      echo "Honk!";
      $currentActivity = "honking";
    }

    function setColour($colour) {
      $this->colour = $colour;
    }

    function generateDescription() {
      return "This $this->year $this->make is a {$this->size} $this->colour coloured truck which runs on {$this->fuelType}.";
    }
  }

  $myTruck = new Truck();

  $myTruck->make = "Toyota";
  $myTruck->year = 2004;
  $myTruck->fuelType = 'S';

  $myTruck->drive();
  $myTruck->setColour("green");

  echo $myTruck->generateDescription();
?>