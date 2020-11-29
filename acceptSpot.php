<?php
    include('db_conn.php');
    $id = $_GET['id'];
    $comment = "All Correct";
    $q = "UPDATE `placedetail` SET `status`= 1, `comment`='$comment'  WHERE `id` = '$id'";
    mysqli_query($con,$q);
    header('location: spotManagement.php');
?>