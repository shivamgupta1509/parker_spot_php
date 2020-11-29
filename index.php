<?php 
  session_start();
  $_SESSION["feedback"] = 0;
  include("partials/credential.php");
  $page = "home";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <?php include("partials/link.php")?>
    <link rel="stylesheet" href="CSS/stylesheets.css">
  </head>
  <body>

  <?php if ($_SESSION["issignedup"]) { ?>
  <?php echo "<script>swal('Successfully Signed Up!', 'Clicked the Ok button!', 'success')</script>"; ?>
  <?php } ?>

    <?php include("partials/navbaar.php"); ?>
    <?php include("partials/modals.php"); ?>
    <?php include("partials/header.php"); ?>

    <div class="container">

      <div class="row row-content">
        <div class="col">
          <div id="mycarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <img class="d-block img-fluid" src="images/park5.jpg" alt="park1">
                
                  <div class="carousel-caption d-none d-md-block">
                    <h2> Search <span class="badge badge-danger"> Spot</span></h2>
                    <p class="d-none d-sm-block">Easily find parking place for your vehicle by simply search on <i>PARKER_SPOT</i> sites directly through your device.....</p>
                  </div>
                
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="images/park2new.jpg" alt="park2">
                  <div class="carousel-caption d-none d-md-block">
                    <h2>Get Parking Place <span class="badge badge-danger">Low Price</span></h2>
                    <p class="d-none d-sm-block">Get your parking at your convenient Parking place at <i>PARKER_SPOT</i>..........</p>
                  </div>  
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="images/park3.jpg" alt="park3">
                <div class="carousel-caption d-none d-md-block">
                  <h2> Any type of Parking <span class="badge badge-danger">Spot</span></h2>
                  <p class="d-none d-sm-block">Get easily every type of parking place such as for <i>bike, car, bus, etc...........</i></p>
                </div>  
              </div>
            </div>
            <ol class="carousel-indicators">
              <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
              <li data-target="#mycarousel" data-slide-to="1"></li>
              <li data-target="#mycarousel" data-slide-to="2"></li>
            </ol>
            <a class="carousel-control-prev" href="#mycarousel" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#mycarousel" role="button" data-slide="next">
              <span class="carousel-control-next-icon"></span>
            </a>
            <button class="btn btn-danger btn-sm" id="carouselButton">
              <span id="carousel-button-icon" class="fa fa-pause"></span>
            </button>
          </div>
        </div>
      </div>
    </div>

    <?php include("partials/footer.php") ?>
    <?php include("partials/script.php") ?>
    <script>
      $("#mycarousel").carousel( { interval: 2000 } );
      $("#carouselButton").click(function(){
        if ($("#carouselButton").children("span").hasClass('fa-pause')) {
          $("#mycarousel").carousel('pause');
          $("#carouselButton").children("span").removeClass('fa-pause');         $("#carouselButton").children("span").addClass('fa-play');
        }
        else if ($("#carouselButton").children("span").hasClass('fa-play')){
          $("#mycarousel").carousel('cycle');
          $("#carouselButton").children("span").removeClass('fa-play');
          $("#carouselButton").children("span").addClass('fa-pause');                    
        }
    } );
    </script>
  </body>
</html>