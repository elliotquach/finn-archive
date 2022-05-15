<?php
    /**
     * Form handler for SAC Part 2 Alt - Taekwondo Women's Weight Classes
     * 
     * Gives the weight in kg and lb, and the weight class for the selected competitor
     * Validates form data, provides error messages with link back to form
     * 
     * @author Tabitha Melgalvis, Virtual School Victoria, <tmelgalv@vsv.vic.edu.au>
     * @author Finn Scicluna-O'Prey, <finn@oprey.co>
     * @copyright Virtual School Victoria 2022
     */
    
    /**
     * Returns the womens weight class from a measurement in kilograms
     *
     * Checks each the weight given against each weight class
     * @param double $weight the weight to be classified
     *
     * @return string the qualifying weight class 
     */
    function determine_weight_class($weight)
    {
        if ($weight <= 30) 
        {
            return 'Underweight - cannot compete';
        }
        elseif ($weight <= 49) 
        {
            return 'Flyweight';
        }
        elseif ($weight <= 57) 
        {
            return 'Featherweight';
        }
        elseif ($weight <= 67) 
        {
            return 'Welterweight';
        }
        else 
        {
            return 'Heavyweight';
        }
    }

    /**
     * Returns the converted kilogram weight in pounds rounded to 2 decimal places
     *
     * Multiplies the kilogram value by 2.205
     * @param double $kilos the weight to convert to pounds
     *
     * @return float the weight in pounds 
     */
    function convert_kilo_to_pound($kilos)
    {
        /** Convert to pounds by multiplying by 2.205 */
        $pounds = $kilos * 2.205;
        /** Return value as a float rounded to 2 decimal places */
        return (float) round($pounds, 2);
    }

    /** Check that a form has been submitted using POST */
    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        /** Store the names and weights of all competitors */
        $weights = 
        [
            'Jiyu' => 48,
            'Elizabeth' => 49,
            'May' => 50,
            'Amina' => 57,
            'Xinyi' => 58,
            'Leah' =>67,
            'Fatima' => 68,
            'Abuk' => 29
        ];

        /** Get name from the select element of the form */
        $name = $_POST['Competitor'];

        if (!isset($name) || !array_key_exists($name, $weights))
        {   
            /** If the name isn't set or isn't one we have the weight for */
            echo '<p>Please select a competitor from the list</p>';
            echo '<a href="weight-class-form.html">Go back to form</a>';
            return;
        }

        $weight_kg = $weights[$name];
        $weight_lb = convert_kilo_to_pound($weight_kg);
        $class = determine_weight_class($weight_kg);

        echo $name . ' is ' . $weight_kg . ' kg (' . $weight_lb . ' lb) and is in the ' . $class . ' class.';
    }
    else
    {
        /** If the value entered was not in the valid range */
        echo '<p>Please select a competitor from the list</p>';
        echo '<a href="weight-class-form.html">Go to form</a>';
    }
?>