<?php 
    session_start();
    include("db_conn.php");
    $spotimgs = $_GET['imgs'];
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
        .crop-img{
            max-height:150px;
            max-width:100%;
            margin-bottom: 10px;
            border-style: groove;
        }
        .large-img{
            width:80%;
            margin-top: 10px;
            border-style: groove;
        }
    </style>
</head>
<body>
        <div id="spotimg" class="modal fade" role="dialog">
            <div class="modal-dialog modal-xl" role="content">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Spot Images: </h4>
                        <?php if($_SESSION["username"] == "admin123"){?>
                            <a href="spotmanagement.php"><button class="btn btn-danger">&times;</button></a>
                        <?php }?>
                        <?php if($_SESSION["username"] != "admin123"){
                            if($_SESSION["page"] == "addplace"){
                                $_SESSION["active"] = 1;
                        ?>
                                <a href="addplace.php"><button class="btn btn-danger">&times;</button></a>
                            <?php } ?>
                            <?php if($_SESSION["page"] == "searchPlace"){ ?>
                                <a href="searchPlace.php"><button class="btn btn-danger">&times;</button></a>
                            <?php } ?>
                        <?php } ?>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <?php
                                $spotimgarray = explode(",", $spotimgs);
                                for($x = 0; $x < (count($spotimgarray)-1); $x += 1){
                                    $img = $spotimgarray[$x];
                                    // echo $img;
                                    $path ="./images/parkingSpotImg/".$img;
                            ?>
                            <div class="col-md-4">
                                <spam><img id="" class="crop-img" src='<?php echo $path?>' alt="spotimg"/></spam>
                            </div>
                            <?php }?>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <img id="bigImage" 
                                class="large-img" 
                                src='<?php echo $path?>'
                                alt="spotimg"/> 
                            </div>
                        </div>    
                    </div>
                </div>
            </div>
        </div>
        <?php include("partials/script.php");
        echo "<script>$('#spotimg').modal('show')</script>";
        ?>
    <script>
        $(".crop-img").click(function(){
			$("#bigImage").attr('src', 
				$(this).attr('src'));
		});
    </script>
</body>
</html>


        