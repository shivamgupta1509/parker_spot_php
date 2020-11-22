<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin_Panel</title>
        <?php include("partials/link.php"); ?>
        <link rel="stylesheet" href="CSS/admin.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Inline+Text:wght@800&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Texturina:wght@400;700&display=swap" rel="stylesheet">
       <style>
            .lab{
                font-family: 'Texturina', serif;
                padding: 5px;
                text-align: left;
                font-size: 20px;
            }
            .card{
                background-color: #bce6eb;
            }
       </style>
    </head>
    <body>
        <div id="dashboard">
            <div id="sidebar">
                <div class="sidebar-header">
                    <h4>Parkers_Spot</h4>
                    <hr>
                </div>
                <div class="sidebar-content">
                    <a href="admin.php"><i class="fa fa-home"></i> Home</a>
                    <a href="#" class="active"><i class="fas fa-list-alt"></i> Spot_Management</a>
                    <a href="userquery.php"><i class="fas fa-comment-dots"></i> User Query</a>
                </div>
            </div>
            <div id="main-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12" id="header">
                            <spam >Parking Spot Details</spam>
                        </div>
                    </div>
                    <?php
                        include("db_conn.php");
                        $q = "SELECT * FROM `placedetail`";
                        $res = mysqli_query($con, $q);
                        while($row = mysqli_fetch_array($res)){
                    ?>
                    <div class="row card mb-4">
                        <div class="col-sm-6">
                            <div class="row">
                                <div class="col-sm-10 offset-1 mb-2 lab">
                                    <spam><i class="far fa-user"></i> User: <?php echo $row["username"] ?></spam>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-10 offset-1 mb-2 lab">
                                    <spam class="lab">Cname</spam>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-10 offset-1 mb-2 lab">
                                    <spam>Cname</spam>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-10 offset-1 mb-2 lab">
                                    <spam>Cname</spam>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-10 offset-1 mb-2 lab">
                                    <spam >Cname</spam>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4 offset-1 mb-2 lab">
                                    <spam>Cname</spam>
                                </div>
                                <div class="col-sm-6 lab">
                                    <spam >Two Wheeler - 10Rs/hr</spam><br>
                                    <spam > Three Wheeler</spam><br>
                                    <spam > Four Wheeler</spam><br>
                                    <spam > Heavy Vehicles</spam><br>
                                </div>
                            </div>   
                            <div class="row">
                                <div class="col-sm-4 offset-1 mb-2 lab">
                                    <spam>Owener Identity Proof</spam>
                                </div>
                                <div class="col-sm-4 mb-2 lab">
                                    <button class="btn btn-primary">View Document</button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4 offset-1 mb-2 lab">
                                    <spam >Property Paper</spam>
                                </div>
                                <div class="col-sm-4 mb-2 lab">
                                    <button class="btn btn-primary">View Document</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            
                        </div>
                    </div>
                    <?php }?>
                </div>
            </div>
        </div>
    <?php include("partials/script.php") ?>
    </body>
</html>