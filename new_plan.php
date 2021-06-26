<?php
	require 'includes/common.php';
	$budget = mysqli_real_escape_string($conn,$_POST['budget']);
	$people = mysqli_real_escape_string($conn,$_POST['people']);
	$insert = "insert into plans(initial_budget, people) values ('$budget','$people')";
    $fetch = "select * from plans where initial_budget= '$budget' and people='$people'";
    $submit = mysqli_query($conn,$insert);
    $get = mysqli_query($conn,$fetch);
    $row = mysqli_fetch_array($get);
    $_SESSION['id'] = $row['id'];
	header('location: plan_detail.php');
    ?>