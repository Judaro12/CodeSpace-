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
<body>
<?php 
require('Include/connect.php');
include('Include/cart_session.php');

?>


 <div class="container mt-4"> <!-- Container start -->
      <div class="row">

<?php

# Retrieve items from 'products' database table.

$q = "SELECT * FROM products";
$r = mysqli_query($link, $q);

if (mysqli_num_rows($r) > 0) {
    // Display body section.
    while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
        // Safely escape all variables to prevent XSS
        $relative_path = htmlspecialchars("uploads/" . $row["item_img"]);
        $itemName = htmlspecialchars($row['item_name']);
        $itemDesc = htmlspecialchars($row['item_desc']);
        $itemPrice = htmlspecialchars($row['item_price']);
        $itemId = htmlspecialchars($row['item_id']);

        echo <<<HTML
            <div class="col-md-3">
              <div class="product-box">
                <div class="product-inner-box position-relative">                     
                  <div class="icons position-absolute">
                    <a href="#" class="text-decoration-none"><i class="fa-solid fa-heart" style="color: #666666;"></i></a>
                    <a href="#" class="text-decoration-none"><i class="fa-solid fa-eye" style="color: #666666;"></i></a>
                  </div>
                  <img src="{$relative_path}" alt="{$itemName}" class="img-fluid">
                    <div class="cart-btn">
                    <a href="Include\add_item.php?id={$itemId}" class="btn btn-light shadow-sm btn-sm rounded-pill"><i class="fa-solid fa-cart-shopping" style="color: #666666;"> Add to Cart</i></a>
    
                  </div>
                  <div class="product-info">
                    <div class="product-name">
                      <h6 class="card-title">{$itemName}</h6>
                    </div>
                    <div class="product-price">
                      <span class="card-text">£ {$itemPrice}</span>
                    </div>
                  </div>
                </div>                  
              </div>
              <hr>
            </div>
            
          
        
      HTML;
    }


# Close database connection.
   mysqli_close( $link) ; 
}
# Or display message.
   else { echo '<p>There are currently no items in the table to display.</p>
' ; }
?>


   </div>
 </div>

 <?php
  include('Include/footer.php');
  ?>
    <script src="Include\cards.js"></script>
    <script src="https://kit.fontawesome.com/a1ff07f7e6.js" crossorigin="anonymous"></script>   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>