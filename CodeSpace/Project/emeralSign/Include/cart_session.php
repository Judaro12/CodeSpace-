

<?php
session_start(); // Start the session

require('connect.php'); // Include database connection

// Check if user is logged in
if (isset($_SESSION['user_id'])) {
    // Include the navigation bar for logged-in users
    include('navbar_session.php');
} else {
    // Redirect to the login page if not logged in
    require('login_tools.php');
    load(); // Assuming this function redirects to the login page
    exit(); // Ensure that no further code is executed after redirection
}

// Now you can continue with your page content below
?>