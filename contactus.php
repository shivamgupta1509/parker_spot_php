<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.1.1/bootstrap-social.min.css">
    <link rel="stylesheet" href="CSS/stylesheets.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Parker_&pot</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="index.html"><spam class="fa fa-home fa-lg"> </spam> Home </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="aboutus.html"><spam class="fa fa-info fa-lg"></spam> About</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#"><spam class="fa fa-address-card fa-lg"></spam> Contact<span class="sr-only">(current)</span></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Login modal -->
    <div id="loginModal" class="modal fade" role="dialog">
      <div class="modal-dialog modal-lg" role="content">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Login </h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-row">
                <div class="form-group col-sm-4">
                  <label class="sr-only" for="exampleInputEmail3">Email address</label>
                  <input type="email" class="form-control form-control-sm mr-1" id="exampleInputEmail3" placeholder="Enter email">
                </div>
                <div class="form-group col-sm-4">
                  <label class="sr-only" for="exampleInputPassword3">Password</label>
                  <input type="password" class="form-control form-control-sm mr-1" id="exampleInputPassword3" placeholder="Password">
                </div>
                <div class="col-sm-auto">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox">
                    <label class="form-check-label"> Remember me</label>
                  </div>
                </div>
              </div>
              <div class="form-row">
                <button type="button" class="btn btn-secondary btn-sm ml-auto" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary btn-sm ml-1">Sign in</button>        
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Sign Up modal -->
    <div id="SignupModal" class="modal fade" role="dialog">
      <div class="modal-dialog modal-lg" role="content">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Sign Up </h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group row">
                <label for="name" class="col-md-2 col-form-label">Name</label>
                <div class="col-md-10">
                    <input type="text" class="form-control" id="firstname" name="name" placeholder="name">
                </div>
            </div>
            <div class="form-group row">
                <label for="username" class="col-md-2 col-form-label">Username</label>
                <div class="col-md-10">
                    <input type="text" class="form-control" id="username" name="username" placeholder="username">
                </div>
            </div>
            <div class="form-group row">
              <label for="passwd" class="col-md-2 col-form-label">Password</label>
              <div class="col-md-10">
                  <input type="text" class="form-control" id="passwd" name="passwd" placeholder="Password">
              </div>
            </div>
            <div class="form-group row">
              <label for="age" class="col-md-2 col-form-label">Age</label>
              <div class="col-md-10">
                  <input type="number" class="form-control" id="age" name="age" placeholder="Enter Age">
              </div>
            </div>
            <div class="form-group row">
                <label for="telnum" class="col-12 col-md-2 col-form-label">Contact Tel.</label>
                <div class="col-5 col-md-3">
                    <input type="tel" class="form-control" id="areacode" name="areacode" placeholder="Area code">
                </div>
                <div class="col-7 col-md-7">
                    <input type="tel" class="form-control" id="telnum" name="telnum" placeholder="Tel. number">
                </div>
            </div>
            <div class="form-group row">
                <label for="emailid" class="col-md-2 col-form-label">Email</label>
                <div class="col-md-10">
                    <input type="email" class="form-control" id="emailid" name="emailid" placeholder="Email">
                </div>
            </div>
              <div class="form-row">
                <button type="button" class="btn btn-secondary btn-sm ml-auto" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary btn-sm ml-1">Register</button>        
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>    

    <header class="jumbotron">
      <div class="container">
        <div class="row row-header">
          <div class="col-12 col-sm-6">
              <h1 class="display-4 title">Parker_&pot</h1>                
              <p class="lead">To solve your problem of finding parking place for your Vehicle, Now here we are......</p>
              <hr class="my-4">
              <p>In this website you can find your choice of parking spot for your vehicle in your area.</p>
          </div>
        </div>
      </div>
    </header>

    <div class="container">

      <div class="row row-content">
        
      </div>
    </div>

    <footer class="footer">
      <div class="container">
          <div class="row">             
              <div class="col-4 offset-1 col-sm-2">
                  <h5>Links</h5>
                  <ul class="list-unstyled">
                      <li><a href="index.html">Home</a></li>
                      <li><a href="aboutus.html">About</a></li>
                      <li><a href="#">Contact</a></li>
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
                    <i class="fa fa-envelope fa-lg"></i>: <a href="mailto:confusion@food.net">ParkerSpot@.in</a>
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
                  <p>© Copyright 2020 PARKER_SPOT </p>
              </div>
         </div>
      </div>
  </footer>

    










    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>