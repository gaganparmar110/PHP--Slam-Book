<?php 

include 'database.php';


if(isset($_POST['submit'])){
	$user=mysqli_real_escape_string($con, $_POST['user']);
	$message=mysqli_real_escape_string($con, $_POST['message']);


	date_default_timezone_set('indian/cocos');
	$time = date('h:i:s a', time());

	if(!isset($user) || $user=='' || !isset($message) || $message==''){
		$error = "Please Fill in your Name and a Message";
		header("Location: index.php?error=".urlencode($error));
		exit();
	}else{
		$query="insert into box (user,message,time)
			       values ('$user','$message','$time')";
		if(!mysqli_query($con, $query)){
			die ('Error: '.mysqli_error($con));
		} else {
			header("Location: index.php");
			exit();
		}
	}
 }
 ?>