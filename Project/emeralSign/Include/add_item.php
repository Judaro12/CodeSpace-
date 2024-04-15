<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The Emerald Sign</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Allura' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
  </head>

  <body>

<?php
require ( 'connect.php' ) ;
# Set page title and display header section.
include ('cart_session.php');

# Get passed product id and assign it to a variable.
if ( isset( $_GET['id'] ) ) $id = $_GET['id'] ; 

# Open database connection.


# Retrieve selective item data from 'products' database table. 
$q = "SELECT * FROM products WHERE item_id = $id" ;
$r = mysqli_query( $link, $q ) ;
if ( mysqli_num_rows( $r ) == 1 )
{
  $row = mysqli_fetch_array( $r, MYSQLI_ASSOC );

  # Check if cart already contains one of this product id.
  if ( isset( $_SESSION['cart'][$id] ) )
  { 
    # Add one more of this product.
    $_SESSION['cart'][$id]['quantity']++; 
    echo '
	<div class="container">
			<div class="alert alert-secondary" role="alert">
				<p>Another '.$row["item_name"].' has been added to your cart</p>
				<a href="..\home.php">Continue Shopping</a> | <a href="..\cart.php">View Your Cart</a>
			</div>
		</div>';
  } 
  else
  {
    # Or add one of this product to the cart.
    $_SESSION['cart'][$id]= array ( 'quantity' => 1, 'price' => $row['item_price'] ) ;
    echo '<div class="container">
			<div class="alert alert-secondary" role="alert">				
				<p>A '.$row["item_name"].' has been added to your cart</p>
			<a href="..\home.php">Continue Shopping</a> | <a href="..\cart.php">View Your Cart</a>
			</div>
		</div>' ;
  }
}

# Close database connection.
mysqli_close($link);

?>

	<script src="https://kit.fontawesome.com/a1ff07f7e6.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>