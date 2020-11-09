<header class="jumbotron">
      <div class="container">
        <div class="row row-header">
          <div class="col-12 col-sm-6">
              <h1 class="display-4 title">Parker_&pot</h1>                
              <p class="lead">To solve your problem of finding parking place for your Vehicle, Now here we are......</p>
              <hr class="my-4">
              <p>In this website you can find your choice of parking spot for your vehicle in your area.</p>
          </div>
          <?php if($_SESSION["flag"] == 0) {?>
            <div class="col-12 col-sm-3 align-self-center">
              <button type="button" class="btn btn-success" style="width: 150px;" data-toggle="modal" data-target="#SignupModal">Sign Up</button>
              <p class="lead">if you are new here, please Register yourself......</p>
            </div>
            <div class="col-12 col-sm-3 align-self-center ">
              <button type="button" class="btn btn-primary" style="width: 150px;" data-toggle="modal" data-target="#loginModal"><span class="fa fa-sign-in"></span> Login</button>
              <p class="lead">if all ready have account, then just login......</p>
            </div>
          <?php }?>
          <?php if($_SESSION["flag"] != 0){?>
            <div class="col-12 col-sm-6">
              <img id="welcomeimg"  src="./images/welcome.png" alt="welcome">
            </div>
          <?php } ?>
        </div>
      </div>
    </header>