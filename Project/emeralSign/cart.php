<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The Emerald Sign</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Allura' rel='stylesheet'>
    <link rel="stylesheet" href="Include\style.css">
  </head>
  <style>
    tr {text-align: center;
       
        
      }
      td {
              text-align: center;
              vertical-align: middle; /* For vertical centering */
          }
  </style>

<body>

<?php // DISPLAY SHOPPING CART PAGE.
include ('include\cart_session.php'); //Include seession file fir cart.

// Check if form has been submitted for update.
if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
  // Update changed quantity field values.
  foreach ( $_POST['qty'] as $item_id => $item_qty ) {
    // Ensure values are integers.
    $id = (int) $item_id;
    $qty = (int) $item_qty;

    // Change quantity or delete if zero.
    if ( $qty == 0 ) { 
      unset ($_SESSION['cart'][$id]); 
    } elseif ( $qty > 0 ) {
      $_SESSION['cart'][$id]['quantity'] = $qty; 
    }
  }
}


$total = 0; // Initialize the grand total variable 

// Display the cart if not empty.
if (!empty($_SESSION['cart']))
{
  // Connect to the database.
  require ('Include\connect.php'); // Connect to the database
  
  // Retrieve all items in the cart from the 'products' database table.
  $q = "SELECT * FROM products WHERE item_id IN (";
  foreach ($_SESSION['cart'] as $id => $value) {
    $q .= $id . ','; 
  }
  $q = substr( $q, 0, -1 ) . ') ORDER BY item_id ASC';
  $r = mysqli_query ($link, $q);

  // Display body section with a form and a table.
  echo '
    <div class="container my-5">
      <h1 style="text-align: center;">The Emerald Sign</h1>
      <h2 style="text-align: center;">Items in your cart</h2>
      <form action="cart.php" method="post">
      <div class="mb-3 mt-5">
	    <table class="table">	      
	    <tbody>';

  while ($row = mysqli_fetch_array ($r, MYSQLI_ASSOC)) {
    // Calculate sub-totals and grand total.
    $subtotal = $_SESSION['cart'][$row['item_id']]['quantity'] * $_SESSION['cart'][$row['item_id']]['price'];
    $total += $subtotal;
    // Display the row/s:
    echo "<tr id='displayItems'>
      <td>{$row['item_name']}</td> 
      <td><input type=\"text\" size=\"3\" name=\"qty[{$row['item_id']}]\" value=\"{$_SESSION['cart'][$row['item_id']]['quantity']}\"></td>
      <td>@ {$row['item_price']} = </td>	
	    <td> £ ".number_format ($subtotal, 2)."</td>      
      </tr>";
  }
  
  # Close the database connection.
  mysqli_close($link); 
  
  # Display the total.
  echo ' <tr><td></td><td></td><td></td>
  <td>Total = £ '.number_format($total,2).'</td>
  </tr>
  <tr><td></td><td></td><td></td>
  <td><input type="submit" name="submit" class="btn btn-light btn-block" value="Update My Cart"></td>
  </tr>
  <tr><td></td><td></td><td></td>
  <td><a href="check_out.php?total='.$total.'" class="btn btn-light btn-block">Checkout Now</a></td>
  </table>
  </form>
  </div>
  <a href="index.php">
    <img src="Img/emeralFooter.png" class="float-start ms-0" width="1300"  id="footerImage">
  </a>';
}
else
# Or display a message.
{ echo '<div class="alert alert-secondary" role="alert">    
   <p>Your cart is currently empty.</p>
   <a href="home.php">Continue Shopping</a>
  </div>
  <a href="index.php">
    <img src="Img/emeralFooter.png" class="float-start ms-0" width="1300"  id="footerImage">
  </a>' ; }

?>

    <script src="https://kit.fontawesome.com/a1ff07f7e6.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>