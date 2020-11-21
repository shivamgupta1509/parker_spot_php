<?php
  $page = "addplace";
  session_start();
  include("partials/spotEntryDB.php");
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
    <?php include("partials/navbaar.php"); ?>
    <?php include("partials/header.php"); ?>
      <div class="container">
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
                <div class="card col-10">
                  <div class="col-12 mb-4 mt-4 card-header">
                      <h1>Add Parking Place.......</h1>
                  </div>
                  <div class="card-body">
                    <div class="col-12 col-md-10">
                      <form method=POST name="addplaceform" id="addplaceform" enctype=”multipart/form-data” >
                        <div class="form-group row">
                          <label for="cname" class="col-md-4 col-form-label"> Company/Owner Name :</label>
                          <div class="col-md-7">
                              <input type="text" class="form-control" id="cname" name="cname" placeholder="Enter Name" required>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="cphone" class="col-md-4 col-form-label"> Phone Number :</label>
                          <div class="col-md-7">
                              <input type="tel" class="form-control" id="cphone" name="cphone" placeholder="Enter Phone Number" required>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="cemail" class="col-md-4 col-form-label"> Email Id :</label>
                          <div class="col-md-7">
                              <input type="email" class="form-control" id="cemail" name="cemail" placeholder="Enter Email Id" required>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="caddress" class="col-md-4 col-form-label"> Address :</label>
                          <div class="col-md-7">
                              <textarea class="form-control" id="caddress" name="caddress" placeholder="Enter Parking place Address" required></textarea>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-md-4 col-form-label"> select type : </label>
                          <div class="col-md-7">
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="checkbox" id="twowheel" name="twowheel" value="1">
                              <label class="form-check-label" for="twowheel">Two Wheelers</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="checkbox" id="threewheel" name="threewheel" value="1">
                              <label class="form-check-label" for="threewheel">Three wheelers</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="checkbox" id="fourwheel" name="fourwheel" value="1">
                              <label class="form-check-label" for="fourwheel">Four Wheelers (Cars)</label>
                            </div> 
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="checkbox" id="heavyveh" name="heavyveh" value="1">
                              <label class="form-check-label" for="heavyveh">Heavy Vehicles (Bus, Truck, etc.)</label>
                            </div>
                          </div>
                          <i class="col-md-7 offset-4 mb-2 mt-2">please check the box of Parking place type....</i>
                        </div>
                        <div class="form-group row">
                          <label class="col-md-4 col-form-label">Charge Per hour</label>
                          <div class="col-md-7">
                            <div class="row">
                              <label class="col-md-7 col-form-label">Two Wheeler (In Rupees) : </label>
                              <div class="col-md-4">
                                <input type="text" id="charge2wheel" name="charge2wheel" class="form-control" value="0">
                              </div>
                            </div>
                            <div class="row">
                              <label class="col-md-7 col-form-label">Three Wheeler (In Rupees) : </label>
                              <div class="col-md-4">
                                <input type="text" id="charge3wheel" name="charge3wheel" class="form-control" value="0">
                              </div>
                            </div>
                            <div class="row">
                              <label class="col-md-7 col-form-label">Four Wheeler (In Rupees) : </label>
                              <div class="col-md-4">
                                <input type="text" id="charge4wheel" name="charge4wheel" class="form-control" value="0">
                              </div>
                            </div>
                            <div class="row">
                              <label class="col-md-7 col-form-label">Heavy Vehicles (In Rupees) : </label>
                              <div class="col-md-4">
                                <input type="text" id="chargeHeavywheel" name="chargeHeavywheel" class="form-control" value="0">
                              </div>
                            </div>
                            <i>Please Enter the Price of Place that you have.....</i>
                          </div>
                        </div>  
                        <div class="form-group row">
                          <label for="file1" class="col-md-4 col-form-label">Owner authetication :</label>
                          <div class="col-md-7">
                            <input type="file" class="form-control-file" id="file1" name="file1" >
                            <i>please upload Image of Adhaar card, Pan Card or other Identity card for Owner Authentication....</i>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="file2" class="col-md-4 col-form-label"> Property Paper :</label>
                          <div class="col-md-7">
                            <input type="file" class="form-control-file" id="file2"  name="file2">
                            <i>please upload Image having Owner Name and property address for verification....</i>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="spotImg[]" class="col-md-4 col-form-label"> Upload Images :</label>
                          <div class="col-md-7">
                            <input type="file" class="form-control-file" id="spotImg[]" name="spotImg[]" accept="image/*" multiple>
                          </div>
                          <i class="col-md-7 offset-4 ">please upload minimum Two images of your Parking Place.....</i>
                        </div>
                        <div class="form-group row">
                          <div class="offset-md-4 col-md-10 mt-4">
                            <button type="submit" class="btn-lg btn-primary" name="addplaceform">Add Place</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
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
  
        
  
    <?php include("partials/footer.php") ?>
    <?php include("partials/script.php") ?>
</body>
</html>