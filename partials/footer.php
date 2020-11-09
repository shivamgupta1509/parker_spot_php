<footer class="footer">
      <div class="container">
          <div class="row">             
              <div class="col-4 offset-1 col-sm-2">
                  <h5>Links</h5>
                  <ul class="list-unstyled">
                    <li>
                        <a 
                            <?php if($_SESSION["flag"] != 0){echo "href = 'option.php'";} else{ echo "href='index.php'";} ?> 
                        >
                            Home <spam class="fa fa-home fa-lg"></spam>
                            <?php if($page == "home" || $page == "option"){ echo "<span class='sr-only'>(current)</span>"; }?>
                        </a>
                    </li>
                    <li>
                        <a href="aboutus.php">About <spam class="fa fa-info fa-lg"></spam> <?php if($page == "about"){ echo "<span class='sr-only'>(current)</span>"; }?></a>
                    </li>
                    <li>
                        <a href="contactus.php">Contact <spam class="fa fa-address-card fa-lg"></spam><?php if($page == "contact"){ echo "<span class='sr-only'>(current)</span>"; }?></a>
                    </li>
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