<?php # Script 11.6 - logout.php

// This page lets the user logout.

// If no cookie is present, redirect the user:
if (!isset($_COOKIE['user_id'])) {

	// Need the functions to create an absolute URL:

	header("location: login.php");
	exit(); // Quit the script.
	
} else { // Delete the cookies.
	setcookie ('user_id','');
	setcookie ('name', '');
			setcookie('isadmin', '');
}

// Set the page title and include the HTML header:
$page_title = 'Logged Out!';
include ('includes/header.html');

// Print a customized message:
echo "<h1>Logged Out!</h1>
<p>You are now logged out!</p>";

include ('includes/footer.html');
?>
