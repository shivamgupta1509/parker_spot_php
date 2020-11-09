
<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
  <div class="container">
    <a class="navbar-brand" href="index.php">Parker_&pot</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item 
          <?php if($page == "home" || $page == "option"){ echo "active"; }?>
        ">
          <a class="nav-link" 
            <?php if($_SESSION["flag"] != 0){echo "href = 'option.php'";} else{ echo "href='index.php'";} ?> 
          >
            <spam class="fa fa-home fa-lg"> </spam> Home 
            <?php if($page == "home" || $page == "option"){ echo "<span class='sr-only'>(current)</span>"; }?>
          </a>
        </li>
        <li class="nav-item <?php if($page == "about"){ echo "active"; }?>">
          <a class="nav-link" href="aboutus.php"><spam class="fa fa-info fa-lg"></spam> About <?php if($page == "about"){ echo "<span class='sr-only'>(current)</span>"; }?></a>
        </li>
        <li class="nav-item <?php if($page == "contact"){ echo "active"; }?>">
          <a class="nav-link" href="contactus.php"><spam class="fa fa-address-card fa-lg"></spam> Contact <?php if($page == "contact"){ echo "<span class='sr-only'>(current)</span>"; }?></a>
        </li>
      </ul>
      <p class="ml-auto" style="font-size: larger; color: cyan; margin-top: 0px;
        margin-bottom: 0rem; text-decoration:underline;">
        <i class="fa fa-user-circle fa-lg" aria-hidden="true"></i> 
        <?php 
          if($_SESSION["flag"] != 0)
          { 
            echo "Welcome ".$_SESSION["username"]; 
          } 
          else{ 
            echo "Welcome Guests!"; 
          }
        ?>
      </p>
      <?php if($_SESSION["flag"] != 0){?>
        <button onClick="document.location.href='logout.php'" class="ml-4 btn btn-danger btn-sm" style="font-family : cursive;"> LOGOUT <i class="fa fa-sign-out fa-lg" aria-hidden="true"></i></button>
      <?php } ?> 
    

    </div>
  </div>
</nav>