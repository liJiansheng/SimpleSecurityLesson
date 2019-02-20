<?php

include ('includes/header.html');
?>
<table width="60%" border='3' align='left'tr style="background-color: #FFFFFF;"
td style="background-color: #FFFFFF;">

<?php
if (($file = fopen("messages.txt", "r"))){
$array = array();
while (!feof($file) ) {
	$text = fgets($file);
	if($text!=""){
		$array [] = explode('~', rtrim($text));
	}
}
fclose($file);	
foreach ($array as $key => $item) {
	if ($item[0]=="" and $item[1]=="" and $item[2]=="") unset ($array[$key]);
	echo "<tr><td>"."Post ".($key+1)."</td>"."<td>"."<b>Topic: </b> ".$item[0]."</br>"."<b>Name: </b>".$item[1]."</br>"."<b>Message: </b>".$item[2]."</td></tr>";
}
}

?>