<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require 'connect_dtb.php'; // Make sure this path is correct
    $errors = [];

    // Validate and sanitize input
    $id = mysqli_real_escape_string($link, trim($_POST['item_id']));
    $name = mysqli_real_escape_string($link, trim($_POST['item_name']));
    $desc = mysqli_real_escape_string($link, trim($_POST['item_desc']));
    $price = mysqli_real_escape_string($link, trim($_POST['item_price']));

    $img_update = ''; // Initialize as an empty string to avoid undefined variable error

    if (isset($_FILES['item_img']) && $_FILES['item_img']['error'] === UPLOAD_ERR_OK) {
        $img_name = basename($_FILES['item_img']['name']); // Sanitize the file name
        $img_tmp = $_FILES['item_img']['tmp_name'];
        $uploads_dir = '..\uploads\\'; 
    
        if (move_uploaded_file($img_tmp, $uploads_dir . $img_name)) {
            $img = mysqli_real_escape_string($link, $img_name); // Store only the file name
            $img_update = ", item_img = '$img'";
        } else {
            $errors[] = 'Error moving uploaded file.';
        }
    }

    if (empty($errors)) {
        // Construct your SQL update statement
        $query = "UPDATE products SET item_name = '$name', item_desc = '$desc'" . $img_update . ", item_price = '$price' WHERE item_id = '$id'";

        if (mysqli_query($link, $query)) {
            header('Location: read.php'); 
            exit();
        } else {
            echo "Error updating record: " . mysqli_error($link);
        }
    } else {
        // Output errors
        foreach ($errors as $error) {
            echo "<div class='alert alert-danger'>" . htmlspecialchars($error) . "</div>";
        }
    }

    mysqli_close($link);
} else {
    // Redirect to form or display a message if the script is accessed without submitting the form
    header('Location: read.php'); // Adjust if necessary
    exit();
}

?>

