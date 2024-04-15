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

    // ---------- STRINGS -----------  
    
    // Define a string using double quotes 
    $string1 = "Hello World!";

    // Define a string using single string 
    $string2 = "This is a PhP string.";

    // Concatenate two string
    $stringConcatenate = $string1 . " " . $string2;

    // Get the length of the string 
    $length = strlen($stringConcatenate);

    // Convert a string to upper case 
    $upper = strtoupper($stringConcatenate);




    // Print the strings and their properties 
    echo $string1 . "<br>" ;
    echo $string2 . "<br>" ;
    echo $stringConcatenate . "<br>" ;
    echo "The length of this string is :" . " " . $length . "<br>";
    echo $upper . "<br>" ;


     
    //----------- NUMBERS ------------
    
    // Integer
    $number1 = 10;
    $number2 = -5;

    // Float / Double 
    $number3 = 3.14;
    $number4 = 1.5e3; // scientific notation (1500)

    // Mathematical operations 
    echo $sum = $number1 + $number2 . "<br>"; 
    echo $difference = $number1 - $number2 . "<br>";
    echo $product = $number1 * $number2 . "<br>";
    echo $quotient = $number1 / $number2 . "<br>";
    echo $modulus = $number1 % $number2 . "<br>";
    



    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>