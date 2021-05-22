<?php
	require "includes/common.php";
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
           <div id="banner-image">
               <div class="container index-container">
                <div id="banner-content">
                    <h1>We help you control your budget.</h1>
                    <?php 
                        if(!isset($_SESSION["email"])){ ?>
                            <a href="login.php" class="btn btn-danger btn-lg active">Start Today</a>
                        <?php } else{ ?>
                            <a href="products.php" class="btn btn-danger btn-lg active">Start Today</a>
                       <?php } ?>
                    
                </div>
               </div>
           </div>
           <?php 
                require "includes/footer.php";
            ?> 
    </body>
</html>