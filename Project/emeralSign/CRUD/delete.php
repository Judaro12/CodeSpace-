<!-- code to delete a item -->
<?php

// requiring file to connecto to the data base!!
require 'connect_dtb.php';

// -------------------  if statement to check if there is a item_id parameter

// using isset() to function to check if the variable (item_id)has been set
if (isset($_GET['item_id'])) {
    
    // using mysqli_real_escape_string() to sanatize the string, making sure there are not especial character or spaces
    // to be bale to be use on a SQL query.
    // -----------------------------------$link(is the variable to connect to the server) $_GET(superglobal to access the data) and move the data 
    // to a PHP variable $item_id
    $item_id = mysqli_real_escape_string($link, $_GET['item_id']);

    // creating a PHP variable $sql containing the SQL query to delete a data using the ID that was recieved
    $sql = "DELETE FROM products WHERE item_id = '$item_id'";

    // another if statement to check if the delete query worked and is if TRUE
    if ($link->query($sql) === TRUE) {
        // header function to be send back to my index.php (or Reader.php)
        header("Location: read.php");
    } else {
        echo "Error deleting record: " . $link->error;
    }
} else {
    echo "No item ID specified.";
}
//  closing link 
mysqli_close($link);
?>
