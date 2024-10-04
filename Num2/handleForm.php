<?php 

session_start();

// Check if submitBtn exists
if(isset($_POST['login'])) {

   if (isset($_SESSION['username'])) {
      session_unset();
      $_SESSION['message'] = "A user is already logged in. Please log out first to log in with a different account.";
      header('Location: index.php');
   } else {
   

	// Get the first name from index.php
	$username = $_POST['username'];

	// Get the password from the input field
	$password = md5($_POST['password']);

	// Set the session variables
	$_SESSION['username'] = $username;
	$_SESSION['password'] = $password;

	// Go back to index.php
	header('Location: index.php');
}
}
if(isset($_POST['logout'])) {
   session_unset(); 
   header('Location: index.php');
}

?>