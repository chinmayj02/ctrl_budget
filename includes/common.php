<?php
    $conn = mysqli_connect("localhost", "root", "", "CTRL_BUDGET") or die(mysqli_error($conn));
    if(!isset($_SESSION['email'])){
    session_start();
    }
?>