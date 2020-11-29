<?php
    include("db_conn.php");
    session_start();
    $id = $_GET["id"];
    if(isset($_POST["reserve"])){
        $username = $_SESSION["username"];
        $stype = $_POST["stype"];
        $date = $_POST["date"];
        $time = $_POST["time"];

        $q = "INSERT INTO `booking_details`(`username`, `place_id`, `stype`, `date`, `time`) VALUES ('$username', '$id', '$stype', '$date', '$time')";
        mysqli_query($con, $q);
        $_SESSION["book"] =1;
        header("location: searchPlace.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include("partials/link.php"); ?>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@600;900&display=swap" rel="stylesheet">
    <style>
        body{
                background-color: #a3d8f4;
        }
        .modal-header{
            font-size: 40px;
            font-family: 'Cinzel', serif;
            text-decoration: underline;
        }
        .modal-body{
            font-size: 20px;
            font-family: 'Cinzel', serif;
        }
    </style>
</head>
<body>
    <div id="bookPlaceModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg" role="content">
            <div class="modal-content">
                <div class="modal-header">
                    <spam>Reservation Of Spot :</spam>
                    <a href="searchPlace.php" ><button class="close">&times;</button></a>
                </div>
                <div class="modal-body">
                    <form method="post">
                    <div class="form-group row ">
                        <label for="date" class="col-md-3 col-form-label text-center">Date : </label>
                        <div class="col-md-9">
                            <input type="date" class="form-control" id="date" name="date">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="time" class="col-md-3 col-form-label text-center">Time :</label>
                        <div class="col-md-9">
                            <input type="time" class="form-control" id="time" name="time">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="stype" class="col-md-3 col-form-label text-center">Spot Type :</label>
                        <div class="col-md-9">
                        <select id="stype" name="stype">
                            <option value="#" selected>Select</option>
                            <option value="Two Wheeler">Two Wheeler</option>
                            <option value="Three Wheeler">Three Wheeler</option>
                            <option value="Four Wheeler">Four Wheeler</option>
                            <option value="Heavy Wheeler">heavy Vehicle</option>
                        </select>
                        </div>
                    </div>
                        <div class="form-row mt-3">
                            <div class="col-sm-6 offset-6 text-right">
                                <a href="searchPlace.php"><button type="button" class="btn btn-secondary btn-lg ml-auto">Cancel</button></a>
                                <button type="submit" class="btn btn-primary btn-lg ml-1" id="reserve" name="reserve">Submit</button> 
                            </div>       
                        </div>
                    </form> 
                </div>
            </div>
        </div>
    </div>
    <?php 
        include("partials/script.php");
        echo "<script>$('#bookPlaceModal').modal('show')</script>";
    ?>
</body>
</html>