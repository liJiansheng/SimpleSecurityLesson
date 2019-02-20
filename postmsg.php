<?php

include ('includes/header.html');
$topic = $_POST['topic'];
$name = $_POST['name'];
$message = $_POST['message'];

$line = $topic ."~". $name ."~". $message."\n";

$file = fopen("messages.txt", "a+");
fwrite($file,$line);
fclose($file);
echo "Message submitted succesfully."."\n";

?>
<a href="viewDiscussion.php">Return to discussion</a>

<?php
include ('includes/footer.html');
?>