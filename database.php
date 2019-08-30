<?php

/**
 * @file
 * Connect to mysql shoutit
 */
$con = mysqli_connect("localhost","root","","chatter");

//Test Connection
if(mysqli_connect_errno()){
	echo "Failed to connect to MySQL: ".mysqli_connect_error();
}

?>
