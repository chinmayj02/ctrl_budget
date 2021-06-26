<?php
	require "includes/common.php";
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
        <?php
            $select = "select * from active_plans order by id ASC";
            $submit = mysqli_query($conn,$select) or die(mysqli_error());
            
            if(mysqli_num_rows($submit)==0){ ?>
                <div class="no-plans"><h1>You dont have any active plans</h1></div>
                <div class="container">
                    <div class="card">
                       <a href="create_new.php">
                           <div class="glyphicon glyphicon-plus-sign">New</div>
                        </a>
            </div>
                </div>
            <?php }else{ ?>
                   <h1 class="plans-title container">Your Plans: </h1>
                   
                            <?php while($row = mysqli_fetch_array($submit))
                                {?>
                                <div class="row text-center">
                        <div class=" col-md-3 col-sm-6">
                            
<div class="container">
            <div class="row row_style">
                <div class="col-xs-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4 id="success-title">Plan Title <span class="glyphicon glyphicon-user">#</span></h4>
                        </div>
                        <div class="panel-body">
                        <?php
                            $fetch = "select * from plans where id=1";
                            $submit = mysqli_query($conn,$fetch);
                            $row=mysqli_fetch_array($submit);
                        ?>
                            <div >
                                Budget : <?php echo $row['initial_budget'] ?>
                            </div>
                            <div class="btn btn-block btn-p"><a href="plan.php">View Plan</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                        </div>
                    </div>
                <?php    }


                    ?>
           <?php }
                require "includes/footer.php";
            ?> 
    </body>
</html>



