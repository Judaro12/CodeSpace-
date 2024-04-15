<?php # LOGIN HELPER FUNCTIONS.

# Function to load specified or default URL.
function load($page = 'login.php') {
  # Begin URL with protocol, domain, and current directory.
  $url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']);

  # Remove trailing slashes then append page name to URL and redirect.
  $url = rtrim($url, '/\\') . '/' . $page;
  header("Location: $url");
  exit();
}

# Function to check email address and password.
function validate($link, $email = '', $pwd = '') {
  # Initialize errors array.
  $errors = array();

  # Check email field.
  if (empty($email)) { 
    $errors[] = 'Enter your email address.';
  } else { 
    $e = mysqli_real_escape_string($link, trim($email));
  }

  # Check password field.
  if (empty($pwd)) {
    $errors[] = 'Enter your password.';
  } else {
    $p = trim($pwd); // No need for mysqli_real_escape_string on password for hashing/verification.
  }

  # If there are no errors, attempt to retrieve the user from the database.
  if (empty($errors)) {
    # The SQL now only selects the user based on email. Password comparison will be done in PHP.
    $q = "SELECT user_id, first_name, last_name, user_password FROM users WHERE user_email='$e'";
    $r = mysqli_query($link, $q);

    if (!$r) {
      die('Query failed: ' . mysqli_error($link));
  }

    if (mysqli_num_rows($r) == 1) {
      $row = mysqli_fetch_array($r, MYSQLI_ASSOC);

      # Use password_verify to compare the submitted password with the hashed password in the database.
      if (password_verify($p, $row['user_password'])) {
        # Password is correct. Return true and user details.
        return array(true, $row);
      } else {
        # Password is not correct. Set error message.
        $errors[] = 'Email address and password not found.';
      }
    } else {
      # Email address not found or more than one entry found. Set error message.
      $errors[] = 'Email address and password not found.';
    }
  }
  # On failure, return false and any error messages.
  return array(false, $errors);
}
