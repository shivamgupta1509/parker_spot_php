<?php 
    include("db_conn.php");
?>
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
                <a href="spotManagement.php"><i class="fas fa-list-alt"></i> Spot_Management</a>
                <a href="#" class="active"><i class="fas fa-comment-dots"></i> User Query</a>
                <a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
            </div>
        </div>
        <div id="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12" id="header">
                        <spam>Query Details</spam>
                    </div>
                </div>
                <div class="row">
                    <div class="offset-1 col-sm-10">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Contact</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Message</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $q = "SELECT * FROM `feedback`";
                                    $res = mysqli_query($con, $q);
                                    while($row = mysqli_fetch_array($res)){
                                ?>
                                <tr>
                                    <th scope="row"><?php echo $row['id'];?></th>
                                    <td><?php echo $row['Name'];?></td>
                                    <td><?php echo $row['contact'];?></td>
                                    <td><?php echo $row['email'];?></td>
                                    <td><?php echo $row['message'];?></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            <div>
        </div>
    </div>



  <?php include("partials/script.php") ?>
</body>
</html>