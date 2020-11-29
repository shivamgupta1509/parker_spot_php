<?php 
include("db_conn.php");
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin_Panel</title>
        <?php include("partials/link.php"); ?>
        <link rel="stylesheet" href="CSS/admin.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Inline+Text:wght@800&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Texturina:wght@400;700&display=swap" rel="stylesheet">
       <style>
           body{
                background-color: #a3d8f4;
            }
            .lab{
                font-family: 'Texturina', serif;
                padding: 5px;
                text-align: left;
                font-size: 23px;
                text-align:left;
                
            }
            .card{
                background-color: #28df99;
                margin: 10px;
            }
       </style>
    </head>
    <body>
        <?php include("partials/modals.php"); ?>
        <div id="dashboard">
            <div id="sidebar">
                <div class="sidebar-header">
                    <h4>Parkers_Spot</h4>
                    <hr>
                </div>
                <div class="sidebar-content">
                    <a href="admin.php"><i class="fa fa-home"></i> Home</a>
                    <a href="#" class="active"><i class="fas fa-list-alt"></i> Spot_Management</a>
                    <a href="userquery.php"><i class="fas fa-comment-dots"></i> User Query</a>
                    <a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
                </div>
            </div>
            <div id="main-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12" id="header">
                            <spam >Parking Spot Details</spam>
                        </div>
                    </div>
                    <?php
                        $q = "SELECT * FROM `placedetail`";
                        $res = mysqli_query($con, $q);
                        while($row = mysqli_fetch_array($res)){
                    ?>
                    <div class="card">
                        <div class="row mb-4 ml-1">
                            <div class="col-sm-5">
                                <div class="row mb-2 lab">
                                    <div class="col-sm-5">
                                        <spam ><i class="fas fa-user-tie"></i> User :</spam> 
                                    </div>
                                    <div class="col-sm-7">
                                        <spam><?php echo $row["username"] ?></spam>
                                    </div>
                                </div>
                                <div class="row mb-2 lab">
                                    <div class="col-sm-5 ">
                                        <spam ><i class="fas fa-building"></i> Company :</spam>
                                    </div>
                                    <div class="col-sm-7">
                                        <spam><?php echo $row["cname"] ?></spam>
                                    </div>
                                </div>
                                <div class="row mb-2 lab">
                                    <div class="col-sm-5">
                                        <spam><i class="fa fa-phone fa-lg"></i> Contact :</spam>
                                    </div>
                                    <div class="col-sm-7">
                                        <spam><?php echo $row["cphone"] ?></spam>
                                    </div>
                                </div>
                                <div class="row mb-2 lab">
                                    <div class="col-sm-5">
                                        <spam><i class="fa fa-envelope fa-lg"></i> Email Id :</spam>
                                    </div>
                                    <div class="col-sm-7">
                                        <spam><?php echo $row["cemail"] ?></spam>
                                    </div>
                                </div>
                                <div class="row mb-2 lab">
                                    <div class="col-sm-5">
                                        <i class="fas fa-map-marker-alt fa-lg"></i> Location :
                                    </div>
                                    <div class="col-sm-7">
                                        <address>
                                            <?php echo $row["caddress"] ?>
                                        </address>
                                    </div>
                                </div>
                                <div class="row mb-2 lab">
                                    <div class="col-sm-5">
                                        <spam><i class="fas fa-thumbtack"></i> Type/Rate :</spam>
                                    </div>
                                    <div class="col-sm-7">
                                        <?php if($row["wheel2"] == 1){?>
                                            <spam ><i class="fas fa-hand-point-right"></i> Two Wheeler -> <b><?php echo $row["wheel2price"] ?>Rs/hr</b></spam><br>
                                        <?php } ?>
                                        <?php if($row["wheel3"] == 1){?>
                                            <spam ><i class="fas fa-hand-point-right"></i>  Three Wheeler -> <b><?php echo $row["wheel3price"] ?>Rs/hr</b></spam><br>
                                        <?php } ?>
                                        <?php if($row["wheel4"] == 1){?>
                                            <spam ><i class="fas fa-hand-point-right"></i>  Four Wheeler -> <b><?php echo $row["wheel4price"] ?>Rs/hr</b></spam><br>
                                        <?php } ?>
                                        <?php if($row["heavywheel"] == 1){?>
                                            <spam ><i class="fas fa-hand-point-right"></i>  Heavy Vehicles -> <b><?php echo $row["heavywheelprice"] ?>Rs/hr</b></spam><br>
                                        <?php } ?>
                                    </div>
                                </div>   
                            </div>
                            <div class="col-sm-6">
                                <div class="row m-3 p-4 lab">
                                    <div class="col-sm-6">
                                        <spam>Owener Identity</spam>
                                    </div>
                                    <div class="col-sm-6">
                                        <button class="btn btn-primary btnOwner" data-toggle="modal" data-target="#ownerAuth" data-id="<?php echo $row["ownerproof"]?>">View Document</button>
                                    </div>
                                </div>
                                <div class="row m-3 p-4 lab">
                                    <div class="col-sm-6">
                                        <spam >Property Paper</spam>
                                    </div>
                                    <div class="col-sm-6">
                                        <button id="btnProperty" class="btn btn-primary" data-toggle="modal" data-target="#propertyPaper" data-id='<?php echo $row["propertyproof"]?>'>View Document</button>
                                    </div>
                                </div>
                                <div class="row m-3 p-4 lab">
                                    <div class="col-sm-6">
                                        <spam>Spot Images</spam>
                                    </div>
                                    <div class="col-sm-6">
                                        <a href="spotImgModal.php?imgs=<?php echo $row["spotimg"] ?>"><button class="btn btn-primary" >View Images</button></a>
                                    </div>
                                </div>
                                <div class="row m-3 p-4 lab">
                                    <div class="col-sm-6">
                                        <spam>Spot Status :</spam>
                                    </div>
                                    <div class="col-sm-6">
                                        <?php if($row["status"] == 0){?>
                                            <spam><b><i>Awaiting for Approval</i></b></spam>
                                        <?php } ?>
                                        <?php if($row["status"] == 1){?>
                                            <spam><b><i>Approved</i></b></spam>
                                        <?php } ?>
                                        <?php if($row["status"] == 2){?>
                                            <spam><b><i>Rejected</i></b></spam>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="row m-3 p-4 lab">
                                    <div class="col-sm-4">
                                        <a href="acceptSpot.php?id=<?php echo $row['id'] ?>"><button class="btn btn-success btn-lg" 
                                        <?php if ($row['status'] != '0'){ ?> disabled <?php   } ?>> Accept</button></a>
                                    </div>
                                    <div class="col-sm-4">
                                        <a href="rejectSpot.php?id=<?php echo $row['id'] ?>"><button class="btn btn-danger btn-lg" 
                                        <?php if ($row['status'] == '2'){ ?> disabled <?php   } ?>> Reject</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }?>
                </div>
            </div>
        </div>
    <?php include("partials/script.php") ?>
    <script>
        $(document).on("click", ".btnOwner", function () {
            // console.log('Ok');
            var imgPath = $(this).data('id');
            $(".modal-body #ownerProofImg").attr("src", imgPath);
            // console.log(imgPath);
        });
        $(document).on("click", "#btnProperty", function () {
            // console.log('Ok');
            var imgPath = $(this).data('id');
            $(".modal-body #propertyProofImg").attr("src", imgPath);
            // console.log(imgPath);
        });
    </script>
    </body>
</html>