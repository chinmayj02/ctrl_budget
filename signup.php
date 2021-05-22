<?php
    if(isset($_SESSION["email"])){
    header("location: products.php");
}
	require 'includes/common.php';
?>
<!doctype html>
<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Sign Up</title>
    <meta name="description" content="">
    <meta name="author" content="Chinmay Joshi">
    <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
        <header>
        <?php 
                require "includes/header.php";
            ?>
        </header>
        <div class="container panel-margin ">
			<div class="panel-s">
				<div class="panel-heading">
					<h2 class="panel-title">SIGN UP</h2>
				</div>
				<div>
					<form method="post" action="signup_script.php">
						<div class="form-group">
							<caption>Name:</caption>
							<input type="text" class="form-control" name="name" placeholder="Name" required>
						</div>
						<div class="form-group">
						<caption>Email:</caption>
							<input type="email" class="form-control" name="email" placeholder="Email" required>
						</div>
						<div class="form-group">
						<caption>Password:</caption>
							<input type="password" class="form-control" name="password" placeholder="Password (Min. 6 characters)" required>
						</div>
						<div class="form-group">
						<caption>Contact:</caption>
							<input type="tel" class="form-control" name="contact" placeholder="Contact" required>
						</div>
						<button type="submit" class="btn btn-primary btn-block btn-s" value="insert">Sign Up</button>
					</form>
				</div>
                </div>
                </div>
                <?php 
                require "includes/footer.php";
            ?> 
    </body>
</html>