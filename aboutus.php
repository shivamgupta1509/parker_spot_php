<?php 
  session_start();
  if ($_SESSION["flag"] == 0) {
    include("partials/credential.php");
  }
  $page = "about";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <?php include("partials/link.php") ?>
    <link rel="stylesheet" href="CSS/stylesheets.css">
  </head>
  <body>
    <?php include("partials/navbaar.php") ?>
    <?php include("partials/modals.php") ?>
    <?php include("partials/header.php") ?>

    <div class="container">
      <div class="row">
        <div class="col-12">
          <h1 class >About us</h1>
          <hr>
        </div>
      </div>
      <div class="row row-content">
        <div class="card-deck">
          <div class="card contact" style="margin: 0 40px 0 40px;">
            <img class="card-img-top" src="images/park1.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Details :</h5><br>
              <p class="card-text">Name : Shivam Gupta</p><br>
              <p class="card-text">Contact no : 98199930</p><br>
              <p class="card-text">Gmail Id : shivamgupta000915@gmail.com</p>
            </div>
          </div>
          <div class="card contact" style="margin: 0 40px 0 40px;">
            <img class="card-img-top" src="images/park1.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Details :</h5><br>
              <p class="card-text">Name : Rinkesh Kumavat</p><br>
              <p class="card-text">Contact no : 9967702318</p><br>
              <p class="card-text">Gmail Id : rinkesh2001kumawat@gmail.com</p>
            </div>
          </div>
          <div class="card contact" style="margin: 0 40px 0 40px;">
            <img class="card-img-top" src="images/park1.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Details :</h5><br>
              <p class="card-text">Name : Mohommad Ali</p><br>
              <p class="card-text">Contact no : 8867895867</p><br>
              <p class="card-text">Gmail Id : khanali0000@gmail.com</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php include("partials/footer.php") ?>
    <?php include("partials/script.php") ?>
  </body>
</html>