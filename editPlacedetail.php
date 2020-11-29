<?php
    include("db_conn.php");
    session_start();
    $id = $_GET["id"];
    include("partials/spotEntryDB.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include("partials/link.php"); ?>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Texturina:wght@400;600&display=swap" rel="stylesheet">
    <style>
        label{
            font-family: 'Texturina', serif; 
        }
        input{
            font-family: 'Texturina', serif;
            
        }
    </style>
</head>
<body>
    <!-- Edit Modal -->
    <div id="editPlaceModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg" role="content">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Place Details: </h4>
                    <a href="addplace.php"><button type="button" class="close">&times;</button></a>
                </div>
                <div class="modal-body">
                    <?php
                        $q = "SELECT * FROM `placedetail` WHERE `id` = '$id'";
                        $res = mysqli_query($con, $q);
                        while($row = mysqli_fetch_array($res)){
                    ?>
                    <div class="col-sm-12">
                        <form method=POST name="editPlaceForm" id="editPlaceForm" enctype="multipart/form-data" >
                            <div class="form-group row">
                                <label for="cname" class="col-md-4 col-form-label"> Company/Owner Name :</label>
                                <div class="col-md-7">
                                <input type="text" class="form-control" id="cname" name="cname" value="<?php echo $row["cname"]?>" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="cphone" class="col-md-4 col-form-label"> Phone Number :</label>
                                <div class="col-md-7">
                                <input type="tel" class="form-control" id="cphone" name="cphone" value="<?php echo $row["cphone"]?>" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="cemail" class="col-md-4 col-form-label"> Email Id :</label>
                                <div class="col-md-7">
                                    <input type="email" class="form-control" id="cemail" name="cemail" value="<?php echo $row["cemail"]?>" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="caddress" class="col-md-4 col-form-label"> Address :</label>
                                <div class="col-md-7">
                                    <textarea class="form-control" id="caddress" name="caddress" value="<?php echo $row["caddress"]?>" required></textarea>
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
                                    <input type="file" class="form-control-file" id="file1" name="file1" accept="image/*" required>
                                    <i>please upload Image of Adhaar card, Pan Card or other Identity card for Owner Authentication....</i>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="file2" class="col-md-4 col-form-label"> Property Paper :</label>
                                <div class="col-md-7">
                                    <input type="file" class="form-control-file" id="file2"  name="file2" accept="image/*" required>
                                    <i>please upload Image having Owner Name and property address for verification....</i>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="file3[]" class="col-md-4 col-form-label"> Upload Images :</label>
                                <div class="col-md-7">
                                    <input type="file" class="form-control-file" id="file3[]" name="file3[]" accept="image/*" multiple required>
                                </div>
                                <i class="col-md-7 offset-4 ">please upload minimum Two images of your Parking Place.....</i>
                            </div>
                            <div class="form-group row">
                                <div class="offset-md-4 col-md-10 mt-4">
                                    <button type="submit" class="btn-lg btn-primary" name="editPlace">Add Place</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>

    <?php 
        include("partials/script.php");
        echo "<script>$('#editPlaceModal').modal('show')</script>"; 
    ?>
</body>
</html>