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
  <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@500;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Lora:wght@500;700&display=swap" rel="stylesheet">
  <style>
  body{
    background-color: #a3d8f4;
  }
  #msg {
      padding: 50px;
      text-align: center;
      margin-bottom: 50px;
      align-items: center;
      margin-top: 30px;
      font-size: 50px;
      background-color: #F56565;
      color: #fff;
      border-radius: 15px;
      box-shadow: 3px 5px 8px rgba(0, 0, 0, 0.4);
      font-family: 'Sansita Swashed', cursive;
    }
    .card{
      border-radius: 15px;
      box-shadow: 3px 5px 8px rgba(0, 0, 0, 0.3);
      padding: 10px;
      margin: 20px;
    }
    .card-title{
      font-family: 'Lora', serif;
      font-weight: 800;
      font-size: 40px;
      color: #fff;
    }
    .card-text{
      font-family: 'Lora', serif;
      text-align: center;
      padding: 10px;
      font-size: 44px;
      font-weight: 700;
      color: #fff;
    }
    .adminFont {
      font-size: 70px;
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
        <a href="#" class="active"><i class="fa fa-home"></i> Home</a>
        <a href="spotManagement.php"><i class="fas fa-list-alt"></i> Spot_Management</a>
        <a href="userquery.php"><i class="fas fa-comment-dots"></i> User Query</a>
        <a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
      </div>
    </div>
    <div id="main-content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12 ">
            <div id="msg">
              <spam><i><b>"Life"</b></i> begins each day,</spam><br>
              <spam> the moment you find a <i><b>"Parking Space."</b></i></spam>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-5 offset-1">
            <div class="card" style="background-color: #007bff;">
              <div class="card-body">
                <h3 class="card-title"><i class="fas fa-users adminFont"></i> No. of Users</h3>
                <hr style="height:2px;border-width:0;color:black;background-color:black">
                <p class="card-text">
                  <?php 
                    include("db_conn.php");
                    $q = "SELECT * FROM `user_details`";
                    $result =  mysqli_query($con, $q);
                    $rows = mysqli_num_rows($result);
                    echo $rows;
                  ?>
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm-5 ">
            <div class="card" style="background-color: #ffc107;">
              <div class="card-body">
                <h3 class="card-title"><i class="fas fa-map-marked-alt adminFont"></i> No. of Spots</h3>
                <hr style="height:2px;border-width:0;color:black;background-color:black">
                <p class="card-text">
                  <?php 
                    include("db_conn.php");
                    $q = "SELECT * FROM `placedetail`";
                    $result =  mysqli_query($con, $q);
                    $rows = mysqli_num_rows($result);
                    echo $rows;
                  ?>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



  <?php include("partials/script.php") ?>
</body>
</html>