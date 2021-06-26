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
    <?php
      $fetch = "select * from plans where id={$_SESSION['id']}";
      $submit=mysqli_query($conn,$fetch);
      $row=mysqli_fetch_array($submit);
      $budget=$row['initial_budget'];
      $people=$row['people'];
    ?>
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
                        <div class="panel-body">
                            <form method="post" action="details.php">
                                <div class="form-group">
                                    <caption>Title</caption>
                                    <input type="text"  class="form-control" name="title" placeholder="Title (Ex Trip to Goa)">
                                </div>
                                <div class="form-inline">
                                    <caption>From: </caption>
                                    <input type="date"  class="form-control" name="date-start" min="2019-04-01"  required>
                                    <caption>To: </caption>
                                    <input type="date"  class="form-control" name="date-end" min="2019-04-20" required>
                                </div>
                                <div class="form-inline">
                                    <caption><br>Budget</caption>
                                    <input class="form-control" <?php echo"placeholder=$budget" ?> disabled>
                                
                                <caption>No. of people</caption>
                                    <input  class="form-control" <?php echo"placeholder=$people" ?> disabled>
                                </div>
                                <?php for($i=1;$i<=$people;$i++){ ?>
                                    <caption>Person <?php echo($i);?>: </caption>
                                    <input type="text"  class="form-control" placeholder="person <?php echo($i)?> name">
                                    <?php } ?>
                               <button type="submit" class="btn btn-primary btn-block btn-s">Submit</button>
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