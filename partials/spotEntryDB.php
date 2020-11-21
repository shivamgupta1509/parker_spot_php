<?php
    include("db_conn.php");

    if(isset($_POST["addplaceform"])){
        $username = $_SESSION["username"];

        $cname = $_POST["cname"];
        $cphone = $_POST["cphone"];
        $cemail = $_POST["cemail"];
        $caddress = $_POST["caddress"];

        // if data is posted, set value to 1, else to 0
        $twowheel = isset($_POST["twowheel"]) ? 1 : 0;
        $threewheel = isset($_POST["threewheel"]) ? 1 : 0;
        $fourwheel = isset($_POST["fourwheel"]) ? 1 : 0;
        $heavyveh = isset($_POST["heavyveh"]) ? 1 : 0;

        $charge2wheel = $_POST["charge2wheel"];
        $charge3wheel = $_POST["charge3wheel"];
        $charge4wheel = $_POST["charge4wheel"];
        $chargeHeavywheel = $_POST["chargeHeavywheel"];

        $ownerAuth_dir = "/images/ownerIdProof/";
        $propertyPaper_dir = "/images/propertyPaper/";
        // $parkingSpotImg = "/images/parkingSpotImg/";

        $ownerAuth_path = $ownerAuth_dir.basename($_FILES['file1']['name']);
        $propertyPaper_path = $propertyPaper_dir.basename($_FILES['file2']['name']);

        $q = "INSERT INTO `placedetail`(`username`, `cname`, `cphone`, `cemail`, `caddress`, `wheel2`, `wheel3`, `wheel4`, `heavywheel`, `wheel2price`, `wheel3price`, `wheel4price`, `heavywheelprice`, `ownerproof`, `propertyproof`) VALUES ('$username', '$cname', '$cphone', '$cemail', '$caddress', '$twowheel', '$threewheel', '$fourwheel', '$heavyveh', '$charge2wheel', '$charge3wheel', '$charge4wheel', '$chargeHeavywheel', '$ownerAuth_path', '$propertyPaper_path')";
        mysqli_query($con, $q);

        move_uploaded_file($_FILES["file1"]["tmp_name"],$ownerAuth_path);
        move_uploaded_file($_FILES["file2"]["tmp_name"],$propertyPaper_path);
        // if(!empty(array_filter($_FILES["spotImg"]["name"]))){
        //     foreach($_FILES["spotImg"]["name"] as $key => $val){
                
        //     }
        // }

    }
?>