<?php
  $page = "addplace";
  session_start();
  $_SESSION["page"] = $page;
  include("partials/spotEntryDB.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Parker_Spot</title>
    <?php include("partials/link.php"); ?>
    <link rel="stylesheet" href="CSS/stylesheets.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@600;900&display=swap" rel="stylesheet">

    <style>
      .lab{
        font-size: 23px;
        font-family: 'Cinzel', serif;
        color: #0f3460;
      }
    </style>
      
</head>
<body>
    <?php if ($_SESSION["del"] == 1) { ?>
    <?php 
      echo "<script>swal('Successfully Deleted Data!', 'Clicked the Ok button!', 'success')</script>"; 
      $_SESSION["del"] = 0;
    }
    ?>
    <?php if ($_SESSION["edit"] == 1) { ?>
    <?php 
      echo "<script>swal('Successfully Updated Data!', 'Clicked the Ok button!', 'success')</script>"; 
      $_SESSION["edit"] = 0;
      }
    ?>
    <?php include("partials/navbaar.php"); ?>
    <?php include("partials/header.php"); ?>
    <?php include("partials/modals.php"); ?>
      <div class="container">
        <div class="row row-content align-items-center">
          <div>
            <ul class="nav nav-tabs" role="tablist">
              <li class="nav-items">
                <a class="nav-link <?php if($_SESSION["active"] == 0){ echo 'active'; }?>" id="add-tab" href="#addplacetap" role="tab" data-toggle="tab" aria-controls="addplacetap" aria-selected="<?php if($_SESSION["active"] == 0){ echo 'true'; } else{ echo 'false';}?>">Add Place</a>
              </li>
              <li class="nav-items">
                <a class="nav-link <?php if($_SESSION["active"] == 1){ echo 'active'; }?>" id="view-tab" href="#veiwprespot" role="tab" data-toggle="tab" aria-controls="veiwprespot" aria-selected="<?php if($_SESSION["active"] == 1){ echo 'true'; } else{ echo 'false';}?>">View Added Spot</a>
              </li>
            </ul>
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane fade <?php if($_SESSION["active"] == 0){ echo 'show active'; }?>" id="addplacetap" aria-labelledby="add-tab">
                <div class="card col-10">
                  <div class="col-12 mb-4 mt-4 card-header">
                      <h1>Add Parking Place.......</h1>
                  </div>
                  <div class="card-body">
                    <div class="col-12 col-md-10">
                      <form method=POST name="addplaceform" id="addplaceform" enctype="multipart/form-data" >
                        <div class="form-group row">
                          <label for="cname" class="col-md-4 col-form-label"> Company/Owner Name :</label>
                          <div class="col-md-7">
                              <input type="text" class="form-control" id="cname" name="cname" placeholder="Enter Name" required>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="cphone" class="col-md-4 col-form-label"> Phone Number :</label>
                          <div class="col-md-7">
                              <input type="tel" class="form-control" id="cphone" name="cphone" placeholder="Enter Phone Number" required>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="cemail" class="col-md-4 col-form-label"> Email Id :</label>
                          <div class="col-md-7">
                              <input type="email" class="form-control" id="cemail" name="cemail" placeholder="Enter Email Id" required>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="caddress" class="col-md-4 col-form-label"> Address :</label>
                          <div class="col-md-7">
                              <textarea class="form-control" id="caddress" name="caddress" placeholder="Enter Parking place Address" required></textarea>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-md-4 col-form-label"> select type : </label>
                          <div class="col-md-7">
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="checkbox" id="twowheel" name="twowheel" value="1">
                              <label class="form-check-label" for="twowheel">Two Wheelers</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="checkbox" id="threewheel" name="threewheel" value="1">
                              <label class="form-check-label" for="threewheel">Three wheelers</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="checkbox" id="fourwheel" name="fourwheel" value="1">
                              <label class="form-check-label" for="fourwheel">Four Wheelers (Cars)</label>
                            </div> 
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="checkbox" id="heavyveh" name="heavyveh" value="1">
                              <label class="form-check-label" for="heavyveh">Heavy Vehicles (Bus, Truck, etc.)</label>
                            </div>
                          </div>
                          <i class="col-md-7 offset-4 mb-2 mt-2">please check the box of Parking place type....</i>
                        </div>
                        <div class="form-group row">
                          <label class="col-md-4 col-form-label">Charge Per hour</label>
                          <div class="col-md-7">
                            <div class="row">
                              <label class="col-md-7 col-form-label">Two Wheeler (In Rupees) : </label>
                              <div class="col-md-4">
                                <input type="text" id="charge2wheel" name="charge2wheel" class="form-control" value="0">
                              </div>
                            </div>
                            <div class="row">
                              <label class="col-md-7 col-form-label">Three Wheeler (In Rupees) : </label>
                              <div class="col-md-4">
                                <input type="text" id="charge3wheel" name="charge3wheel" class="form-control" value="0">
                              </div>
                            </div>
                            <div class="row">
                              <label class="col-md-7 col-form-label">Four Wheeler (In Rupees) : </label>
                              <div class="col-md-4">
                                <input type="text" id="charge4wheel" name="charge4wheel" class="form-control" value="0">
                              </div>
                            </div>
                            <div class="row">
                              <label class="col-md-7 col-form-label">Heavy Vehicles (In Rupees) : </label>
                              <div class="col-md-4">
                                <input type="text" id="chargeHeavywheel" name="chargeHeavywheel" class="form-control" value="0">
                              </div>
                            </div>
                            <i>Please Enter the Price of Place that you have.....</i>
                          </div>
                        </div>  
                        <div class="form-group row">
                          <label for="file1" class="col-md-4 col-form-label">Owner authetication :</label>
                          <div class="col-md-7">
                            <input type="file" class="form-control-file" id="file1" name="file1" accept="image/*" required>
                            <i>please upload Image of Adhaar card, Pan Card or other Identity card for Owner Authentication....</i>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="file2" class="col-md-4 col-form-label"> Property Paper :</label>
                          <div class="col-md-7">
                            <input type="file" class="form-control-file" id="file2"  name="file2" accept="image/*" required>
                            <i>please upload Image having Owner Name and property address for verification....</i>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="file3[]" class="col-md-4 col-form-label"> Upload Images :</label>
                          <div class="col-md-7">
                            <input type="file" class="form-control-file" id="file3[]" name="file3[]" accept="image/*" multiple required>
                          </div>
                          <i class="col-md-7 offset-4 ">please upload minimum Two images of your Parking Place.....</i>
                        </div>
                        <div class="form-group row">
                          <div class="offset-md-4 col-md-10 mt-4">
                            <button type="submit" class="btn-lg btn-primary" name="addplaceform">Add Place</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <div role="tabpanel" class="tab-pane fade <?php if($_SESSION["active"] == 1){ echo 'show active'; }?>" id="veiwprespot" aria-labelledby="view-tab">
                <div class="col-12">
                  <?php
                    $username = $_SESSION['username'];
                    $q = "SELECT * FROM `placedetail` where `username`='$username'";
                    $res = mysqli_query($con, $q);
                    while($row = mysqli_fetch_array($res)){
                  ?>
                  <div class="card mb-3 p-2 img-fluid">
                    <img src="./images/blurParkingImg.jpg" alt="background img" style="width: 1000px; height: 600px">
                    <div class="card-img-overlay">
                      <div class="row">
                        <div class="col-sm-6">
                          <div class="row mb-3 lab">
                            <div class="col-sm-5">
                              <spam ><i class="fas fa-building"></i> <b>Company :</b></spam>
                            </div>
                            <div class="col-sm-7">
                              <spam><?php echo $row["cname"] ?></spam>
                            </div>
                          </div>
                          <div class="row mb-3 lab">
                            <div class="col-sm-5">
                              <spam><i class="fa fa-phone fa-lg"></i> <b>Contact :</b></spam>
                            </div>
                            <div class="col-sm-7">
                              <spam><?php echo $row["cphone"] ?></spam>
                            </div>
                          </div>
                          <div class="row mb-3 lab">
                            <div class="col-sm-5">
                              <spam><i class="fa fa-envelope fa-lg"></i> <b>Email Id :</b></spam>
                            </div>
                            <div class="col-sm-7">
                              <spam><?php echo $row["cemail"] ?></spam>
                            </div>
                          </div>
                          <div class="row mb-3 lab">
                            <div class="col-sm-5">
                              <i class="fas fa-map-marker-alt fa-lg"></i> <b>Location :</b>
                            </div>
                            <div class="col-sm-7">
                              <address>
                                <?php echo $row["caddress"] ?>
                              </address>
                            </div>
                          </div>
                          <div class="row mb-3 lab">
                            <div class="col-sm-5">
                              <spam><i class="fas fa-thumbtack"></i> <b>Type/Rate :</b></spam>
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
                        <div class="col-sm-6 mt-3">
                          <div class="row mb-5  lab">
                            <div class="col-sm-6" >
                              <spam>Owener Identity</spam>
                            </div>
                            <div class="col-sm-6">
                              <button class="btn btn-primary btnOwner" data-toggle="modal" data-target="#ownerAuth" data-id="<?php echo $row["ownerproof"]?>">View Document</button>
                            </div>
                          </div>
                          <div class="row mb-5  lab">
                            <div class="col-sm-6">
                              <spam >Property Paper</spam>
                            </div>
                            <div class="col-sm-6">
                              <button id="btnProperty" class="btn btn-primary" data-toggle="modal" data-target="#propertyPaper" data-id='<?php echo $row["propertyproof"]?>'>View Document</button>
                            </div>
                          </div>
                          <div class="row mb-5  lab">
                            <div class="col-sm-6">
                              <spam>Spot Images</spam>
                            </div>
                            <div class="col-sm-6">
                              <a href="spotImgModal.php?imgs=<?php echo $row["spotimg"] ?>"><button class="btn btn-primary" >View Images</button></a>
                            </div>
                          </div>
                          <div class="row mb-5 lab">
                            <div class="col-sm-6">
                              <spam>Spot Status :</spam>
                            </div>
                            <div class="col-sm-6">
                              <?php if($row["status"] == 0){?>
                                <spam class="badge badge-pill badge-info"  style="font-size: 30px;"><b><i>Awaiting</i></b></spam>
                              <?php } ?>
                              <?php if($row["status"] == 1){?>
                                <spam class="badge badge-pill badge-success" style="font-size: 30px;"><b><i>Approved</i></b></spam>
                              <?php } ?>
                              <?php if($row["status"] == 2){?>
                                <spam class="badge badge-pill badge-danger" style="font-size: 30px;"><b><i>Rejected</i></b></spam>
                              <?php } ?>
                            </div>
                          </div>
                          <div class="row mb-5 mr-2  lab">
                            <div class="col-sm-5">
                              <spam><b>Admin Comment :</b></spam>
                            </div>
                            <div class="col-sm-7 " style="background-color: white;">
                              <spam><b><?php echo $row["comment"] ?></b></spam>
                            </div>
                          </div>
                          <div class="row lab">
                            <div class="col-sm-5">
                              <a href="reservationDetail.php?id=<?php echo $row['id'];?>" ><button class="btn btn-info btn-lg p-2" <?php if($row["status"] == 0  || $row["status"] == 2){?> disabled <?php } ?>>Booking Details</button>
                            </div>
                            <div class="col-sm-3">
                              <a href="editPlaceDetail.php?id=<?php echo $row['id']; ?>" ><button class="btn btn-primary btn-lg p-2"><i class="fas fa-edit fa-lg"></i> Edit</button></a>
                            </div>
                            <div class="col-sm-3">
                              <a href="delete.php?id= <?php echo $row['id'] ?>" > <button class="btn btn-danger btn-lg p-2"><i class="far fa-trash-alt fa-lg"></i> Delete</button></a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <?php } ?>
                </div> 
              </div>
            </div>
          </div>
        </div>
      </div>
  
        
  
    <?php include("partials/footer.php") ?>
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