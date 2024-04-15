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
        // ------------------Arrays---------------------------- 

      // Numeric Array

      echo "<h1>Season of the year!</h1>";

      //creating an Array variable with the seasons 
      $seasons = array ("Winter", "Spring", "Summer", "Autum");
      
      foreach( $seasons as $value){
        echo " - $value" . "<br/>";
      }

      echo "<br>";
      // --------------------- Associative Arrays-------------

      //fist meethod to associate arrays.

      $salaries = array("ally" => 2000, "jade" => 1000, "hannah" => 500);

      // calling and printing the array
      echo "The salary of Ally is £". $salaries["ally"]. "<br>";
      echo "The salary of Jade is £". $salaries["jade"]. "<br>";
      echo "The salary of hannah is £". $salaries["hannah"]. "<br>";

      echo "<br>";

      //------------------------Multidimensional Arrays ------------------

      $rota = array(
        "ally" => array(
          "monday" => "9am to 5pm",
          "tuesday" => "day off",
          "wednesday" => "10am to 6pm"
        ),
        "jade" => array(
          "monday" => "day off",
          "tuesday" => "9am to 5pm",
          "wednesday" => "10am to 6pm"
        ),
        "hannah" => array(
          "monday" => "10am to 6pm",
          "tuesday" => "9am to 5pm",
          "wednesday" => "day off"
        ) 

        );

        // accessing multi - dimensional array values

        echo "Rota for Ally on Monday : ". $rota["ally"]["monday"]."<br>" ;
        echo "Rota for Jade on Tuesday : ". $rota["jade"]["tuesday"]."<br>" ;
        echo "Rota for Hannah on Wednesday : ". $rota["hannah"]["wednesday"]."<br>" ;









    

  



    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>