<?php
	require 'includes/common.php';
	$name = mysqli_real_escape_string($conn,$_POST['name']);
	$email = mysqli_real_escape_string($conn,$_POST['email']);
	$password = mysqli_real_escape_string($conn,$_POST['password']);
	$contact = mysqli_real_escape_string($conn,$_POST['contact']);
	$safe_pass = md5($password);
	$insert = "insert into users(name, email, password, contact) values ('$name','$email','$safe_pass','$contact')";
	$fetch = "select id from users where email = '$email'";
	$check = mysqli_query($conn,$fetch);
	if (filter_var($email, FILTER_VALIDATE_EMAIL)) 
	{
		if(mysqli_num_rows($check)>0)
		{
			// echo​ ("<script type='text/javascript'> alert("Account Already Exists.") </script>");
			die("Account Already Exists.");
		}
		else
		{
			if(strlen($contact)==10)
			{
				if(strlen($password)>=6)
				{
					$submit = mysqli_query($conn,$insert) or die(mysqli_error($conn));
					session_start();
					$_SESSION['email'] = $email;
					$_SESSION['id'] =  mysqli_insert_id($conn);
					if(isset($_SESSION['email']))
					{
						// echo​ ​ ("<script>location.href={'home.php'}</script>");
						header('location: home.php');
					}
				}
				else
				{
					// echo​ ("<script type='text/javascript'>alert("Password must contain minimum 6 characters.")</script>");
					die("Password must contain minimum 6 characters.");
				}
			}
			else
			{
				// echo​ "<script type='text/javascript'>alert("Invalid phone number.")</script>";
				die("Invalid phone number.");
			}
		}
	}
	else
	{
		// echo​ "<script type='text/javascript'>alert("Invalid email format.")</script>";
		die("Invalid email format.");
	}
?>