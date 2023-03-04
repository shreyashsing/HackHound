<?php
session_start();

// Check if the login form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Get the username and password from the form submission
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Check if the username and password are valid
  if ($username == 'user' && $password == 'pass') {
    // Set the session variable to indicate that the user is logged in
    $_SESSION['loggedin'] = true;

    // Redirect the user to the homepage
    header('Location: index.php');
  } else {
    // Redirect the user back to the login page with an error message
    header('Location: login.php?error=Invalid username or password');
  }
}
?>
