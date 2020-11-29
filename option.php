<?php
  $page = "option";
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Parker_Spot</title>
    <?php include("partials/link.php"); ?>
    <link rel="stylesheet" href="CSS/stylesheets.css">
</head>
<body>
  <?php 
  if($_SESSION["issignedin"] == true && $_SESSION["flag"] == 1){
    // echo "hello";
    echo "<script>swal('Successfully Signed In!', 'Clicked the Ok button!', 'success')</script>";
    $_SESSION["flag"] = 2;

  } 
  if($_SESSION["issignedup"] == true && $_SESSION["flag"] == 1){
    echo "<script>swal('Successfully Signed Up!', 'Clicked the Ok button!', 'success')</script>";
    $_SESSION["flag"] = 2;
  } 
  ?>
  <?php include("partials/navbaar.php"); ?>
  <?php include("partials/header.php");?>
  
    <div class="container">
      <div class="row row-content">
        <div class="col-12 col-sm-10 offset-1" >
          <div class="card">
            <h3 class="card-header">Find Your Spot.....</h3>
            <div class="card-body">
              <div class="row">
                <div class="col-12 col-sm-6 ">
                  <img id="fspotimg" src="images/findplace.jpg" alt="findspot">
                </div>
                <div class="col-12 col-sm-6 fscard">
                  <p>Get Your Favourite Spot easily.....</p>
                  <a href="searchPlace.php"><button class="btn btn-info"><span class="fa fa-search"></span> Search Place</button></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <hr>
      <div class="row row-content">
        <div class="col-12 col-sm-10 offset-1">
          <div class="card">
            <h3 class="card-header">Add Parking Spot.....</h3>
            <div class="card-body">
              <div class="row">
                <div class="col-12 col-sm-6 ">
                  <img id="addspotimg" src="images/addplace.jpg" alt="addspot">
                </div>
                <div class="col-12 col-sm-6 fscard">
                  <p>Start Your own Bussiness.....</p>
                  <a href="addplace.php"><button class="btn btn-info" ><spam class="fa fa-plus"></spam> Add Spot</button></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  
  <?php include("partials/footer.php"); ?>
  <?php include("partials/script.php"); ?>
</body>
</html>