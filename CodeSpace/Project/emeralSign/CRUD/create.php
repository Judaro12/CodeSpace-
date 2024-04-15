
<?php     

// Checking if the form was submitted using the POST METHOD 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Connecting to the database calling my connect_dtb.php file 
    require('connect_dtb.php');

    // Initialize an array to store error messages
    $errors = array();

    // Check for item name
    if (empty($_POST['item_name'])) {
        $errors[] = 'Enter the item name.';
    } else {
        $n = mysqli_real_escape_string($link, trim($_POST['item_name']));
    }

    // Check for item description
    if (empty($_POST['item_desc'])) {
        $errors[] = 'Enter the item description.';
    } else {
        $d = mysqli_real_escape_string($link, trim($_POST['item_desc']));
    }

    // Check for item image
    if (!isset($_FILES['item_img']) || $_FILES['item_img']['error'] !== UPLOAD_ERR_OK) {
        $errors[] = 'Upload failed or no file was selected.';
    } else {
        $img_name = $_FILES['item_img']['name'];
        $img_tmp = $_FILES['item_img']['tmp_name'];
        $img = mysqli_real_escape_string($link, trim($img_name));

        // Move the uploaded file to a permanent location
        $upload_directory = '..\uploads\\';
        $destination = $upload_directory . $img_name;

        if (!move_uploaded_file($img_tmp, $destination)) {
            $errors[] = 'Error moving uploaded file.';
        }
    }

    // Check for item price
    if (empty($_POST['item_price'])) {
        $errors[] = 'Enter the item price.';
    } else {
        $p = mysqli_real_escape_string($link, trim($_POST['item_price']));
    }

    // If there are no errors, insert data into database
    if (empty($errors)) {
        $q = "INSERT INTO products (item_name, item_desc, item_img, item_price)
              VALUES ('$n', '$d', '$img', '$p')";

        $r = mysqli_query($link, $q);

        if ($r) {
            header('Location: read.php'); 
            exit();

            // Close database connection
            mysqli_close($link);
        } else {
            echo '<p>The following error(s) occurred:</p>';
            echo 'Error: ' . mysqli_error($link); // Display MySQL error message
            echo '<p>Please try again.</p>';

            // Close database connection
            mysqli_close($link);
            exit();
        }
    } else {
        // Display errors
        echo '<p>The following error(s) occurred:</p>';
        foreach ($errors as $msg) {
            echo "$msg<br>";
        }
        echo '<p>Please try again.</p>';

        // Close database connection
        mysqli_close($link);
        exit();
    }
}
?>

             
    
  

        
    


        




