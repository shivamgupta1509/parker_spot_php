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
        <a href="#" class="active"><i class="fa fa-home"></i> Home</a>
        <a href="#"><i class="fas fa-list-alt"></i> Spot_Management</a>
        <a href="userquery.php"><i class="fas fa-comment-dots"></i> User Query</a>
      </div>
    </div>
    <div id="main-content">
      <div class="container-fluid">
        <div class="row">

        </div>
      </div>
    </div>
  </div>



  <?php include("partials/script.php") ?>
</body>
</html>