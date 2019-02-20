<?php # Script 9.3 - login.php

// This page processes the login form submission.
// Upon successful login, the user is redirected.
// Two included files are necessary.
// Send NOTHING to the Web browser prior to the set() lines!

// Check if the form has been submitted:
if (isset($_GET['submitted'])) {


	// Need the database connection:
	require_once ('../mysqli_connect.php');
		
	// Check the login:
	$e = $_GET['uid'];
	$p = $_GET['pass'];
		
	$q = "SELECT * FROM users WHERE uid='$e' AND pass='$p'";
			
		$r = @mysqli_query ($dbc, $q); // Run the query.
		
		// Check the result:
		if (mysqli_num_rows($r) == 1) {
			
			// Fetch the record:
			$row = mysqli_fetch_array ($r, MYSQLI_ASSOC);
			// Return true and the record:
			//return array(true, $row);
			setcookie ('user_id', $row['uid']);
		    setcookie ('name', $row['name']);
			setcookie('isadmin', $row['admin']);
			header("location: loggedin.php");
			
		exit(); // Quit the script.
		} else { // Not a match!
			$errors[] = 'The user id and password entered do not match those on file.';
		}
	
	mysqli_close($dbc); // Close the database connection.

} // End of the main submit conditional.

// Create the page:
include ('includes/login_page.inc.php');
?>
