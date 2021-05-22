<?php
	require 'includes/common.php';
	$email = mysqli_real_escape_string($conn,$_POST['email']);
	$password = mysqli_real_escape_string($conn,$_POST['password']);
	$safe_pass = md5($password);
	$insert = "insert into login_data(email, password) values ('$email','$safe_pass')";
	$fetch = "select * from users where email = '$email' AND password = '$safe_pass'";
	$check = mysqli_query($conn,$fetch) or die(mysqli_error($conn));
	if(mysqli_num_rows($check) == 0)
	{
		die("ERROR 404. User Not Found");
	}
	else
	{
		$submit = mysqli_query($conn,$insert) or die(mysqli_error($conn));
		$row = mysqli_fetch_array($check);
		if(!isset($_SESSION['email'])){
			$_SESSION['email'] = $email;
			$_SESSION['id'] =  $row['id'];
		}
		header("location: home.php");
	}
?>