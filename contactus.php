<?php 
  session_start();
 if ($_SESSION["flag"] == 0) {
    include("partials/credential.php");
  }
  $page = "contact";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <?php include("partials/link.php") ?>
    <link rel="stylesheet" href="CSS/stylesheets.css">
    <style>
      .contact{
          background-color: #ffcfdf;
          text-align: center;
          padding: 2%;
          box-sizing: border-box;
          outline: none;
          border-radius: 8px;
          box-shadow: 0 0 4px 1px;
      }
      .contact h1{
          font-family: 'Ubuntu', sans-serif;
      }
      .contact button{
          font-size: larger;
          font-family: 'Montserrat', sans-serif;
      }
      .txtb{
          display: inline-block;
          text-align: left;
          width: 80%;
          padding: 8px;
      }
      input,textarea{
          width: 100%;
          box-sizing: border-box;
          outline: none;
          border-radius: 8px;
          padding: 2%;
      }
      input{
          height: 35px;
      }
      .txtb label{
          font-size: larger;
          font-family: 'Montserrat', sans-serif;
      }
    </style>


  </head>
  <body>

    <?php include("partials/navbaar.php") ?>
    <?php include("partials/modals.php") ?>
    <?php include("partials/header.php") ?>

    <div class="container">
      <div class="row row-content">
        <div class="col-sm-6 offset-3 contact">
          <h1>Contact Us</h1>
          <div class="txtb">
            <label>Full Name :</label>
            <input type="text" name="" value="" placeholder="Enter Your Name">
          </div>
          <div class="txtb">
            <label>Email :</label>
            <input type="email" name="" value="" placeholder="Enter Your Email">
          </div>
          <div class="txtb">
            <label>Contact no :</label>
            <input type="text" name="" value="" placeholder="Enter Your Contact no">
          </div>
          <div class="txtb">
            <label>Message :</label>
            <textarea name="" id="" cols="30" rows="5" placeholder="Your Message"></textarea>
          </div>
          <br>
          <button type="button" class="btn btn-outline-success">Send</button>
        </div>
      </div>
    </div>

    <?php include("partials/footer.php") ?>
    <?php include("partials/script.php") ?>
  </body>
</html>