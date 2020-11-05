<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Parker_Spot</title>
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
              <h1 id="userdis">UserName</h1>
            </div>
          </div>
        </div>
      </header>
  
      <div class="container ">
        <div class="row row-content align-items-center">
          <div>
            <ul class="nav nav-tabs" role="tablist">
              <li class="nav-items">
                <a class="nav-link active" id="add-tab" href="#addplacetap" role="tab" data-toggle="tab" aria-controls="addplacetap" aria-selected="true">Add Place</a>
              </li>
              <li class="nav-items">
                <a class="nav-link" id="view-tab" href="#veiwprespot" role="tab" data-toggle="tab" aria-controls="veiwprespot" aria-selected="false">View Added Spot</a>
              </li>
            </ul>
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane fade show active" id="addplacetap" aria-labelledby="add-tab">
                <div class="col-12 mb-4 mt-4">
                  <h1>Add Parking Place.......</h1>
                </div>
                <div class="col-12 col-md-10">
                  <form>
                    <div class="form-group row">
                      <label for="cname" class="col-md-3 col-form-label"> Company/Owner Name :</label>
                      <div class="col-md-6">
                        <input type="text" class="form-control" id="cname" name="cname" placeholder="Enter Name">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="cphone" class="col-md-3 col-form-label"> Phone Number :</label>
                      <div class="col-md-6">
                        <input type="tel" class="form-control" id="cphone" name="cphone" placeholder="Enter Phone Number">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="clandline" class="col-md-3 col-form-label"> Land-Line Number :</label>
                      <div class="col-md-6">
                        <input type="tel" class="form-control" id="clandline" name="clandline" placeholder="Enter Land-Line Number">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="cemail" class="col-md-3 col-form-label"> Email Id :</label>
                      <div class="col-md-6">
                        <input type="email" class="form-control" id="cemail" name="cemail" placeholder="Enter Email Id">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="cplacetype" class="col-md-3 col-form-label"> select type : </label>
                      <div class="col-md-6">
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox" id="twowheel" name="twowheel" value="twowheel">
                          <label class="form-check-label" for="twowheel">Two Wheelers</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox" id="threewheel" name="threewheel" value="threewheel">
                          <label class="form-check-label" for="threewheel">Three wheelers</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox" id="fourwheel" name="fourwheel" value="fourwheel">
                          <label class="form-check-label" for="fourwheel">Four Wheelers (Cars)</label>
                        </div> 
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox" id="heavyveh" name="heavyveh" value="heavyveh">
                          <label class="form-check-label" for="heavyveh">Heavy Vehicles (Bus, Truck, etc.)</label>
                        </div>
                      </div>
                      <i class="col-md-6 offset-3 mb-2 mt-2">please check the box of Parking place type....</i>
                    </div>
                    <div class="form-group row">
                      <label for="caddress" class="col-md-3 col-form-label"> Address :</label>
                      <div class="col-md-6">
                        <textarea class="form-control" id="caddress" name="caddress" placeholder="Enter Parking place Address"></textarea>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="pspotimg" class="col-md-3 col-form-label"> Upload Images :</label>
                      <div class="col-md-3">
                        <input type="number" class="form-control" id="numofimg" name="numofimg" placeholder="Number of Images">
                      </div>
                      <div class="col-md-3">
                        <input type="file" class="form-control-file" id="pspotimg" name="pspotimg" accept="image/*" multiple>
                      </div>
                      <i class="col-md-6 offset-3 ">please upload minimum Two images of your Parking Place.....</i>
                    </div>
                    <div class="form-group row">
                      <div class="offset-md-3 col-md-10 mt-4">
                          <button type="submit" class="btn-lg btn-primary">Add Place</button>
                      </div>
                  </div>
                  </form>
                </div>
              </div>
              <div role="tabpanel" class="tab-pane fade" id="veiwprespot" aria-labelledby="view-tab">
                <div class="col-12">
                  <p>No previous Data is Available.....</p>
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