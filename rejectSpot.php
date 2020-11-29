<?php
    include('db_conn.php');
    $id = $_GET['id'];
    if (isset($_POST["comment"])) {
        $comment = $_POST["commentBox"];
        $q = "UPDATE `placedetail` SET `status`= 2, `comment`='$comment'  WHERE `id` = '$id'";
        mysqli_query($con,$q);
        header('location: spotManagement.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include("partials/link.php"); ?>
    <style>
        body{
                background-color: #a3d8f4;
        } 
    </style>
</head>
<body>
    <div id="commentModal" class="modal fade" role="dialog">
        <div class="modal-dialog " role="content">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"><i class="fas fa-comments fa-lg"></i> Comment : </h4>
                    <a href="spotmanagement.php"><button class="btn btn-danger">&times;</button></a>
                </div>
                <div class="modal-body">
                    <form method="post">
                        <div class="form-row">
                            <div class="col-sm-10 offset-1">
                                <textarea rows="4" cols="50" id="commentBox" name="commentBox"></textarea>
                            </div>
                        </div>
                        <div class="form-row mt-3">
                            <div class="col-sm-6 offset-6">
                                <a href="spotmanagement.php"><button type="button" class="btn btn-secondary btn-lg ml-auto">Cancel</button></a>
                                <button type="submit" class="btn btn-primary btn-lg ml-1" id="comment" name="comment">Submit</button> 
                            </div>       
                        </div>
                    </form> 
                </div>
            </div>
        </div>
    </div>
    <?php include("partials/script.php");
    echo "<script>$('#commentModal').modal('show')</script>";
    ?>
</body>
</html>