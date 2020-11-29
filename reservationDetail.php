<?php
include("db_conn.php");
session_start();
$place_id = $_GET["id"];
$_SESSION["active"] = 1;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include("partials/link.php"); ?>
</head>
<body>
    <div id="reservationDetailModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-xl" role="content">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"><i class="far fa-clipboard"></i> Reservation Record : </h4>
                    <a href="addplace.php"><button class="btn btn-danger">&times;</button></a>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Contact</th>
                                        <th scope="col">email</th>
                                        <th scope="col">Spot Type</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Time</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $count = 1;
                                        $q = "SELECT * FROM `booking_details` WHERE `place_id` = '$place_id'";
                                        $res = mysqli_query($con, $q);
                                        while($row = mysqli_fetch_array($res)){
                                    ?>
                                    <tr>
                                        <th scope="row"><?php echo $count;?></th>
                                        <?php
                                            $vowner = $row["username"];
                                            $q1 = "SELECT * FROM `user_details` WHERE `username` = '$vowner'";
                                            $val = mysqli_query($con, $q1);
                                            while($user = mysqli_fetch_array($val)){  
                                        ?>
                                        <td><?php echo $user['fullname']?></td>
                                        <td><?php echo $user['contact']?></td>
                                        <td><?php echo $user['email']?></td>
                                            <?php } ?>
                                        <td><?php echo $row['stype'];?></td>
                                        <td><?php echo $row['date'];?></td>
                                        <td><?php echo $row['time'];?></td>
                                        <td>
                                            <div class="row">
                                                <?php if ($row['status'] == '0'){ ?> 
                                                    <div class="col-sm-6">
                                                        <a href="acceptBook.php?bid=<?php echo $row['id'] ?>" ><button class="btn btn-success "><i class="far fa-check-circle"></i></button></a>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <a href="rejectBook.php?bid=<?php echo $row['id'] ?>"><button class="btn btn-danger " ><i class="far fa-times-circle"></i></button></a>
                                                    </div>
                                                <?php } ?>
                                                <?php if ($row['status'] != '0'){ ?>
                                                    <?php if($row["status"] == 1){?>
                                                        <spam class="badge badge-pill badge-success"><i>Accepted</i></b></spam>
                                                    <?php } ?>
                                                    <?php if($row["status"] == 2){?>
                                                        <spam class="badge badge-pill badge-danger"><b><i>Rejected</i></b></spam>
                                                    <?php } ?>
                                                <?php } ?>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php 
                                        $count = $count + 1;
                                        } 
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>
    <?php 
        include("partials/script.php");
        echo "<script>$('#reservationDetailModal').modal('show')</script>";
    ?>
</body>
</html>