<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Php Worshop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <?php

// ------------ First Challenge ------------------------------------

    // Creating the variables 

    $width = 10;
    $height = 5;

    // creating a third value to assing result 

    $area = $width * $height;

    //Printing the result 

    echo "The rectangle has a width of $width meters, a height of $height meters, and an area of $area square meters.". "<br>";

    echo "<br>";

// ----------------------- Second challenge ---------------------------
    // creating two variables 

    $number1 = 10;
    $number2 = 5;

    // printing the addition 

    $addition = $number1 + $number2;
    echo "Addition of $number1 and $number2 is : $addition". "<br>";

    // printing the Substraction

    $subtraction = $number1 - $number2;
    echo "Subtraction of $number1 and $number2 is : $subtraction". "<br>";

    // printng the Multipication 

    $multiplication = $number1 * $number2;
    echo "Addition of $number1 and $number2 is : $multiplication". "<br>";

    //printing the divicion 

    $division = $number1 / $number2;
    echo "Addition of $number1 and $number2 is : $division". "<br>";

    // printing concatenation
    $string = "$number1" . "$number2";
    echo "concatenation of $number1 and $number2 is : $string" . "<br>";

    echo "<br>"; 

// --------------------------- third challenge ------------------------
     

    // Variable to accept the age 
    $age = 25;

    // variables with days, hours and minutes 

    $days = $age * 365;
    $hours = $days * 24;
    $minutes = $hours * 60;

    echo "<h1>Welcome to the Age Calculator</h1>
        <h2>Your age: $age </h2>
        <h2> You have been alive for:</h2>
    <ul> 
        <li>$days days</li>
        <li>$hours hours</li>
        <li>$minutes minutes</li>
    </ul>";
    
    echo "<br>";

    // ---------------------------- fourth Callenge --------------------

    // create and initialise an array 

    
    $weekdays = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");
    
    echo "<h4> Days of the Week </h4>";
    foreach ($weekdays as $day){
    echo "
         <ul> 
            <li> $day </li>
         </ul>";
    };


    $summer= "July-Aug";
    $winter= "Jan-Feb";
    $temperature = array("summer_low" =>11, "summer_high" =>19, "winter_low" =>1, "winter_high" =>7);
	   
    echo "<table  class=\"table table-condensed\">
    <tr>
    <h1>Average Temperature in Edinburgh</h1>
    </tr>
    
    <tr>
    <th>Month</th>
    <th>High</th>
    <th>Low</th>
    </tr>

    <tr>
    <th>$summer</th>
    <th>" . $temperature['summer_high'] . " ℃</th>
    <th>" . $temperature['summer_low'] . " ℃</th>
    </tr>

    <tr>
    <th>$winter</th>
    <th>" . $temperature['winter_high'] . " ℃</th>
    <th>" . $temperature['winter_low'] . " ℃</th>
    </tr>
    </table>";


  
      
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>