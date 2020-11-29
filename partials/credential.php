<?php
  include("db_conn.php");
  $_SESSION["username"] = "";
  $_SESSION["issignedup"] = false;
  $_SESSION["issignedin"] = false;
  $_SESSION["flag"] = 0;
  $_SESSION["active"] = 0;
  $_SESSION["del"] = 0;
  $_SESSION["edit"] = 0;
  $_SESSION["page"] = "null";
  $_SESSION["book"] = 0;
  //Registration process
  if (isset($_POST["register"])) {
    $fullname = $_POST["fullname"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $areacode = $_POST["areacode"];
    $telnum = $_POST["telnum"];
    $age = $_POST["age"];
    if ($fullname == "" || $username == "" || $password == "" || $email =="" ||$areacode == "" || $telnum == "" || $age == "") {
      if ($fullname == "") {
        echo "<script>alert('Please Enter your Full Name')</script>";
      } else if ($username == "") {
        echo "<script>alert('Please Enter your UserName')</script>";
      } elseif ($password == "") {
        echo "<script>alert('Please Enter your password')</script>";
      } elseif ($email == "") {
        echo "<script>alert('Please Enter your Email')</script>";
      } elseif ($areacode == "") {
        echo "<script>alert('Please Enter your Area code')</script>";
      } elseif ($telnum == "") {
        echo "<script>alert('Please Enter your Phone Number ')</script>";
      } elseif ($age == "") {
        echo "<script>alert('Please Enter your Age')</script>";
      }
    } else {
      if ($username == $password) {
        echo "<script>alert('Username and Password can not be Same')</script>";
      } elseif($age < 18){
        echo "<script>alert('You should at least 18 years old for register on this site') </script>";
      } else {
        $contact = $areacode + $telnum;
        $q = "INSERT INTO `user_details`(`fullname`, `username`, `password`, `age`, `contact`, `email`) VALUES ('$fullname','$username', '$password', '$age', '$contact', '$email')";
        $query = mysqli_query($con, $q);
        $_SESSION["issignedup"] = true;
        $_SESSION["flag"] = 1;
        $_SESSION["username"] = $username;
        header("location: option.php");
      }
    }
  }
  // Login process
  if (isset($_POST["signin"])) {
    $username = $_POST["uname"];
    $password = $_POST["pw"];
    $q = "select * from `user_details` where `username` = '$username' and `password` = '$password'";
    $query = mysqli_query($con, $q);
    if (mysqli_num_rows($query) > 0) {
      $_SESSION["issignedin"] = true;
      $_SESSION["flag"] = 1;

      while($result = mysqli_fetch_array($query)) {
        $_SESSION["username"] = $result["username"];
        if ($result["username"] == "admin123") {
          header("location: admin.php");
        }
        else{
          header("location: option.php");
        }
        
      }
    } else {
      echo "<script>alert('Invalid Username Or Password')</script>";
    }
  }
?>