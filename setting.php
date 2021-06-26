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
    <title>Change Password</title>
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
					<h2 class="panel-title">Change Password</h2>
				</div>
				<div>
                <form method="post" action="setting_script.php">
                        <div class="form-group">
                            <input type="password"  class="form-control" name="opass" placeholder="Old Password" required>
                        </div>
                        <div class="form-group">
                            <input type="password"  class="form-control" name="npass" placeholder="New Password" required>
                        </div>
                        <div class="form-group">
                            <input type="password"  class="form-control" name="rpass" placeholder="Re-type New Password" required>
                        </div>
                    </form>
                   <a href="setting_script.php"> <button type="submit" class="btn btn-primary btn-block btn-s" value="select">Change</button></a>
				</div>
                </div>
                </div>
                <?php 
                require "includes/footer.php";
            ?> 
    </body>
</html>