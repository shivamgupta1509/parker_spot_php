<?php
  $page = "searchPlace";
  include("db_conn.php");
  session_start();
  $_SESSION["page"] = $page;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Spot</title>
    <?php include("partials/link.php"); ?>
    <link rel="stylesheet" href="CSS/stylesheets.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@600;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Piedra&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@500;700&display=swap" rel="stylesheet">
    <style>
        .chead{
            font-size: 50px;
            font-family: 'Cinzel', serif;
            font-weight: 900;
            text-decoration: underline;
            color: #382933;
        }
        .lab{
            font-size: 23px;
            font-family: 'Piedra', cursive;
            color: #ac4b1c;
        }
        #head{
            padding: 50px;
            text-align: center;
            margin-bottom: 50px;
            align-items: center;
            margin-top: 30px;
            font-size: 50px;
            background-color: #F56565;
            color: #fff;
            border-radius: 15px;
            box-shadow: 3px 5px 8px rgba(0, 0, 0, 0.4);
            font-family: 'Sansita Swashed', cursive;
        }
    </style>
</head>
<body>
    <?php if ($_SESSION["book"] == 1) { ?>
    <?php 
      echo "<script>swal('Request Send Successfully !', 'Clicked the Ok button!', 'success')</script>"; 
      $_SESSION["book"] = 0;
    }
    ?>
    <?php include("partials/navbaar.php"); ?>
    <?php include("partials/header.php"); ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <ul class="nav nav-tabs" role="tablist">
                <li class="nav-items">
                    <a class="nav-link active" id="showSpot-tab" href="#showSpotTab" role="tab" data-toggle="tab" aria-controls="showSpotTab" aria-selected=" true">Parking Spot</a>
                </li>
                <li class="nav-items">
                    <a class="nav-link " id="reservedSpot-tab" href="#reservedSpotTab" role="tab" data-toggle="tab" aria-controls="reservedSpotTab" aria-selected="false">Reservation Details</a>
                </li>
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade show active" id="showSpotTab" aria-labelledby="showSpot-tab">
                        <div class="row">
                            <div class="col-sm-12 m-3 p-4 text-center" id="head">
                                <spam> Parking Area Available</spam>
                            </div>
                        </div>
                        <?php
                            $q = "SELECT * FROM `placedetail` where `status` = 1";
                            $result = mysqli_query($con, $q);
                            while($row = mysqli_fetch_array($result)){
                        ?>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card img-fluid mb-3 p-2">
                                    <img src="./images/searchplace.jpg" alt="background img" style="width: auto; height: 400px">
                                    <div class="card-img-overlay">
                                        <div class="row mb-3 chead">
                                            <div class="col-sm-12 text-center">
                                                <spam><?php echo $row["cname"]?></spam>
                                            </div>
                                        </div>
                                        <div class="row mb-2 lab">
                                            <div class="col-sm-6">
                                                <div class="row p-2">
                                                    <div class="col-sm-5">
                                                            <b><spam><i class="fa fa-phone fa-lg"></i> Contact :</spam></b>
                                                        </div>
                                                        <div class="col-sm-7">
                                                            <spam><?php echo $row["cphone"] ?></spam>
                                                        </div>
                                                    </div>
                                                </div>
                                            <div class="col-sm-6">
                                                <div class="row p-2">
                                                    <div class="col-sm-5">
                                                        <b><spam><i class="fa fa-envelope fa-lg"></i> Email Id :</spam></b>
                                                    </div>
                                                    <div class="col-sm-7">
                                                        <spam><?php echo $row["cemail"] ?></spam>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-2 lab">
                                            <div class="col-sm-6">
                                                <div class="row p-2">
                                                    <div class="col-sm-5">
                                                        <b><i class="fas fa-map-marker-alt fa-lg"></i> Location :</b>
                                                    </div>
                                                    <div class="col-sm-7">
                                                        <address>
                                                            <?php echo $row["caddress"] ?>
                                                        </address>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="row p-2">
                                                    <div class="col-sm-5">
                                                        <b><spam><i class="fas fa-thumbtack"></i> Type/Rate :</spam></b>
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
                                        </div>
                                        <div class="row mb-2 lab">
                                            <div class="col-sm-6">
                                                <div class="row p-2">
                                                    <div class="col-sm-6">
                                                        <b><spam>Spot Images : </spam></b>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <a href="spotImgModal.php?imgs=<?php echo $row["spotimg"] ?>"><button class="btn btn-primary" >View Images</button></a>
                                                    </div>
                                                </div> 
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="row p-2">
                                                    <div class="col-sm-10 text-right">
                                                        <a href="bookPlace.php?id=<?php echo $row['id']?>"><b><button class="btn btn-success btn-lg">Book</button></b></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="reservedSpotTab" aria-labelledby="reservedSpot-tab">
                        <div class="row">
                            <div class="col-sm-12 m-3 p-4 text-center" id="head">
                                <spam> Reservation</spam>
                            </div>
                        </div>
                        <div class="row">
                            <div class="offset-1 col-sm-10">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Location</th>
                                            <th scope="col">Spot Type</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Time</th>
                                            <th scope="col">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $username = $_SESSION["username"];
                                            $count = 1;
                                            $q = "SELECT * FROM `booking_details` WHERE `username` = '$username'";
                                            $res = mysqli_query($con, $q);
                                            while($row = mysqli_fetch_array($res)){
                                        ?>
                                        <tr>
                                            <th scope="row"><?php echo $count;?></th>
                                            <td>
                                                <?php
                                                    $place_id = $row["place_id"];
                                                    $q1 = "SELECT `caddress` FROM `placedetail` WHERE `id` = $place_id";
                                                    $val = mysqli_query($con, $q1);
                                                    while($loc = mysqli_fetch_array($val)){ echo $loc["caddress"];} 
                                                ?>
                                            </td>
                                            <td><?php echo $row['stype'];?></td>
                                            <td><?php echo $row['date'];?></td>
                                            <td><?php echo $row['time'];?></td>
                                            <td>
                                                <?php if($row["status"] == 0){?>
                                                    <spam class="badge badge-pill badge-info" style="font-size: 15px;">Awaiting</spam>
                                                <?php } ?>
                                                <?php if($row["status"] == 1){?>
                                                    <spam class="badge badge-pill badge-success" style="font-size: 15px;">Approved</spam>
                                                <?php } ?>
                                                <?php if($row["status"] == 2){?>
                                                    <spam class="badge badge-pill badge-danger" style="font-size: 15px;">Rejected</spam>
                                                <?php } ?>
                                            </td>
                                        </tr>
                                        <?php 
                                            $count = $count + 1;
                                        } 
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include("partials/footer.php") ?>
    <?php include("partials/script.php") ?>
</body>
</html>