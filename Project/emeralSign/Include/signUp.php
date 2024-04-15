<?php

// The script begins by checking if it was triggered by a POST request.
// This is important for processing form data sent to the server.
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // This line includes an external PHP file for the database connection.
    // It's assumed that this file establishes a connection to your MySQL database
    // and stores the connection in a variable named `$link`.
    require('..\CRUD\connect_dtb.php');

    // An array named `$errors` is initialized to store any validation errors
    // that are encountered during the processing of the form data.
    $errors = array();

    // Each of these blocks validates a piece of form data (First Name, Last Name, Email, and Password).
    // `empty()` checks if the form field is empty.
    // If it is, an error message is added to the `$errors` array.
    // If not, the data is sanitized using `mysqli_real_escape_string()` and trimmed of whitespace using `trim()`.
    // The sanitized data is then stored in a variable for later use.
    if (empty($_POST['first_name'])) {
        $errors[] = 'Please enter your first name.';
    } else {
        $fn = mysqli_real_escape_string($link, trim($_POST['first_name']));
    }

    // Similar validation and sanitization for the last name.
    if (empty($_POST['last_name'])) {
        $errors[] = 'Please enter your last name.';
    } else {
        $ln = mysqli_real_escape_string($link, trim($_POST['last_name']));
    }

    // For the email, an additional check using `filter_var()` with `FILTER_VALIDATE_EMAIL` is used
    // to ensure the email address is in a valid format.
    if (empty($_POST['user_email']) || !filter_var($_POST['user_email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Please enter a valid email address.';
    } else {
        $ue = mysqli_real_escape_string($link, trim($_POST['user_email']));
    }

    // Password validation checks if the password field is empty and
    // if the password matches the confirm password field.
    // It then hashes the password for secure storage.
    if (empty($_POST['user_password'])) {
        $errors[] = 'Please enter a password.';
    } elseif ($_POST['user_password'] != $_POST['confirm_password']) {
        $errors[] = 'Your password did not match the confirmed password.';
    } else {
        $up = mysqli_real_escape_string($link, trim($_POST['user_password']));
        $hashed_password = password_hash($up, PASSWORD_DEFAULT);
    }

    // Before proceeding with inserting the new user,
    // the script checks if the provided email is already associated with an account.
    // This is done by preparing a SQL statement that selects users with the given email.
    // If the email is found in the database, an error message is added to the `$errors` array.
    if (empty($errors)) {
        $q = "SELECT user_id FROM users WHERE user_email = ?";
        $stmt = mysqli_prepare($link, $q);
        mysqli_stmt_bind_param($stmt, 's', $ue);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        
        if (mysqli_stmt_num_rows($stmt) != 0) {
            $errors[] = 'Email address already registered. <a class="alert-link" href="login.php">Sign In Now</a>';
        }
        mysqli_stmt_close($stmt);
    }

    // If there are no errors at this point, the script proceeds to insert the new user into the database.
    // It prepares a SQL statement to insert the sanitized and validated data.
    // After execution, if successful, it redirects the user to the homepage.
    // Otherwise, it displays an error message.
    if (empty($errors)) {
        $q = "INSERT INTO users (first_name, last_name, user_email, user_password) VALUES (?, ?, ?, ?)";
        $stmt = mysqli_prepare($link, $q);
        mysqli_stmt_bind_param($stmt, 'ssss', $fn, $ln, $ue, $hashed_password);
        $success = mysqli_stmt_execute($stmt);

        if ($success) {
            header('Location: index.php');
            exit();
        } else {
            echo '<p>Error while inserting data into the database: ' . mysqli_error($link) . '</p>';
        }
        mysqli_stmt_close($stmt);
    } else {
        // If there were errors, they are displayed to the user.
        echo '<p>The following error(s) occurred:</p><ul>';
        foreach ($errors as $msg) {
            echo "<li>$msg</li>";
        }
        echo '</ul><p>Please try again.</p>';
    }

    // The database connection is closed.
    mysqli_close($link);
}
?>
