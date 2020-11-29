<?php
    include("db_conn.php");
    session_start();
    $id = $_GET['id'];
    $q = "DELETE FROM `placedetail` WHERE `id` = '$id'";
    mysqli_query($con,$q);
    $_SESSION["del"] = 1;
    header("location: addplace.php");     
?>
