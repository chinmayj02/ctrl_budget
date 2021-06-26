<?php
	require 'includes/common.php';
    if(!isset($_SESSION["email"])){
		header("location: login.php");
	}
?>
<!doctype html>
<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Control Budget</title>
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
        <div class="container ">
            <div class="row row_style">
                <div class="col-xs-6">
                    <div class="panel panel-primary panel-align">
                        <div class="panel-heading text-center" id="id">
                            <h4>Create New Plan</h4>
                        </div>
                        <div class="panel-body">
                            <form method="post" action="new_plan.php">
                                <div class="form-group">
                                    <caption>Initial Budget</caption>
                                    <input type="text"  class="form-control" name="budget" placeholder="Initial budget (Ex 10000)" required>
                                </div>
                                <div class="form-group">
                                <caption>Number of people</caption>
                                    <input type="number" min=1 max=10 class="form-control" name="people" value=1 required>
                                </div>
                               <button type="submit" class="btn btn-primary btn-block btn-s" >Next</button>
                            </form>
                        </div>
                </div>
            </div>
        </div>
</div>
        <?php 
                require "includes/footer.php";
            ?> 
    </body>
</html>