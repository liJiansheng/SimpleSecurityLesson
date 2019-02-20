<?php # Script 11.4 - loggedin.php

// The user is redirected here from login.php.

// If no cookie is present, redirect the user:
//if (!isset($_COOKIE['user_id'])) {

	// Need the functions to create an absolute URL:
	//require_once ('includes/login_functions.inc.php');
	//$url = absolute_url();
	//header("Location: $url");
//	exit(); // Quit the script.
	
//}

// Set the page title and include the HTML header:
$page_title = 'Logged In!';
include ('includes/header.html');

// Print a customized message:
echo "<h1>Logged In!</h1>

<p>You are now logged in, {$_COOKIE['name']}!</p>";

if($_COOKIE['isadmin']){
	echo "<p><a href=\"#\">Manage Server</a></p><br>";
}


?>
<form action="postmsg.php"  method="post">
<label for="postName">Name:</label><input id="postName" name="name" type="text" ><br>
<label for="postTopic">Topic:</label><input id="postTopic" name="topic" type="text"><br>
<center><label for="postContent">Content:</label></center>
<textarea id="postContent" name="message" rows="10" cols="50"></textarea><br>
<input type="submit" value="Post Message" name="submit">
</form>

  <p><a href=\"logout.php\">Logout</a></p>
<?php
include ('includes/footer.html');
?>
