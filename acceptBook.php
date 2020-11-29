<?php
    include("db_conn.php");
    session_start();
    $bid = $_GET["bid"];
    // echo $bid;
    $q = "UPDATE `booking_details` SET `status`= 1 WHERE `id` = '$bid'";
    mysqli_query($con, $q);
    $_SESSION["active"] = 1;
    header("location: addplace.php");
?>