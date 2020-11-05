<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Parker_Spot</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.1.1/bootstrap-social.min.css">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>
    <link rel="stylesheet" href="CSS/stylesheets.css">
</head>
<body>

  <?php echo "<script>swal('Successfully Signed In!', 'Clicked the Ok button!', 'success')</script>"; ?>

    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
          <a class="navbar-brand" href="#">Parker_&pot</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              
              <li class="nav-item">
                <a class="nav-link" href="aboutus.html"><spam class="fa fa-info fa-lg"></spam> About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contactus.html"><spam class="fa fa-address-card fa-lg"></spam> Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      
      <header class="jumbotron">
        <div class="container">
          <div class="row row-header">
            <div class="col-12 col-sm-6">
                <h1 class="display-4 title">Parker_&pot</h1>                
                <p class="lead">To solve your problem of finding parking place for your Vehicle, Now here we are......</p>
                <hr class="my-4">
                <p>In this website you can find your choice of parking spot for your vehicle in your area.</p>
            </div>
            <div class="col-12 col-sm-6">
              <img id="welcomeimg"  src="images/welcome.png" alt="welcome">
              <h1 id="userdis"><?php echo $_SESSION["username"] ?></h1>
            </div>
          </div>
        </div>
      </header>
  
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
                    <a href="#"><button class="btn btn-info"><span class="fa fa-search"></span> Search Place</button></a>
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
                    <a href="addplace.html"><button class="btn btn-info" ><spam class="fa fa-plus"></spam> Add Spot</button></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  
        
  
      <footer class="footer">
        <div class="container">
            <div class="row">             
                <div class="col-4 offset-1 col-sm-2">
                    <h5>Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Home</a></li>
                        <li><a href="aboutus.html">About</a></li>
                        <li><a href="contactus.html">Contact</a></li>
                    </ul>
                </div>
                <div class="col-7 col-sm-5 "> 
                    <h5>Our Address</h5>
                    <address>
                      TCET,<br>
                      Kandiwali east<br>
                      Mumbai, Maharashtra<br>
                      <i class="fa fa-phone fa-lg"></i>: +852 1234 5678<br>
                      <i class="fa fa-fax fa-lg"></i>: +852 8765 4321<br>
                      <i class="fa fa-envelope fa-lg"></i>: <a href="#">ParkerSpot@.in</a>
                  </address>
                </div>
                <div class="col-12 col-sm-4 align-self-center">
                    <div class="text-center">
                        <a class="btn btn-social-icon btn-google" href="http://google.com/+"><i class="fa fa-google-plus fa-lg"></i></a>
                        <a class="btn btn-social-icon btn-facebook" href="http://www.facebook.com/profile.php?id="><i class="fa fa-facebook fa-lg"></i></a>
                        <a class="btn btn-social-icon btn-linkedin" href="http://www.linkedin.com/in/"><i class="fa fa-linkedin fa-lg"></i></a>
                        <a class="btn btn-social-icon btn-twitter" href="http://twitter.com/"><i class="fa fa-twitter fa-lg"></i></a>
                        <a class="btn btn-social-icon btn-youtube" href="http://youtube.com/"><i class="fa fa-youtube fa-lg"></i></a>
                        <a class="btn btn-social-icon " href="mailto:"><i class="fa fa-envelope-o fa-lg"></i></a>
                    </div>
                </div>
           </div>
           <div class="row justify-content-center">             
                <div class="col-auto">
                    <p>© Copyright 2020 PARKER_SPOT</p>
                </div>
           </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js">   </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"> </script>
</body>
</html>