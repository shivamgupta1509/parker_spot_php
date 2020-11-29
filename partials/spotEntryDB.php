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

        $ownerAuth_dir = "./images/ownerIdProof/";
        $propertyPaper_dir = "./images/propertyPaper/";
        $parkingSpotImg_dir = "./images/parkingSpotImg/";

        $ownerAuth_path = $ownerAuth_dir.basename($_FILES['file1']['name']);
        $propertyPaper_path = $propertyPaper_dir.basename($_FILES['file2']['name']);
        $spotImgNames = "";
        if(!empty(array_filter($_FILES['file3']['name']))){
            foreach($_FILES['file3']['name'] as $key=>$val){
                $spotImgName = basename($_FILES['file3']['name'][$key]);
                $spotImgPath = $parkingSpotImg_dir . $spotImgName;
                $spotImgNames = $spotImgName .','. $spotImgNames;
                move_uploaded_file($_FILES["file3"]["tmp_name"][$key],$spotImgPath);
            }
        }
        move_uploaded_file($_FILES["file1"]["tmp_name"],$ownerAuth_path);
        move_uploaded_file($_FILES["file2"]["tmp_name"],$propertyPaper_path);




        $q = "INSERT INTO `placedetail`(`username`, `cname`, `cphone`, `cemail`, `caddress`, `wheel2`, `wheel3`, `wheel4`, `heavywheel`, `wheel2price`, `wheel3price`, `wheel4price`, `heavywheelprice`, `ownerproof`, `propertyproof`, `spotimg`) VALUES('$username', '$cname', '$cphone', '$cemail', '$caddress', '$twowheel', '$threewheel', '$fourwheel', '$heavyveh', '$charge2wheel', '$charge3wheel', '$charge4wheel', '$chargeHeavywheel', '$ownerAuth_path', '$propertyPaper_path', '$spotImgNames')";

        mysqli_query($con, $q);
        echo"<script>alert('Form Submitted Successfully!')</script>";

    }

    if(isset($_POST["editPlace"])){

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

        $ownerAuth_dir = "./images/ownerIdProof/";
        $propertyPaper_dir = "./images/propertyPaper/";
        $parkingSpotImg_dir = "./images/parkingSpotImg/";

        $ownerAuth_path = $ownerAuth_dir.basename($_FILES['file1']['name']);
        $propertyPaper_path = $propertyPaper_dir.basename($_FILES['file2']['name']);
        $spotImgNames = "";
        if(!empty(array_filter($_FILES['file3']['name']))){
            foreach($_FILES['file3']['name'] as $key=>$val){
                $spotImgName = basename($_FILES['file3']['name'][$key]);
                $spotImgPath = $parkingSpotImg_dir . $spotImgName;
                $spotImgNames = $spotImgName .','. $spotImgNames;
                move_uploaded_file($_FILES["file3"]["tmp_name"][$key],$spotImgPath);
            }
        }
        move_uploaded_file($_FILES["file1"]["tmp_name"],$ownerAuth_path);
        move_uploaded_file($_FILES["file2"]["tmp_name"],$propertyPaper_path);




        $q = "UPDATE `placedetail` SET `cname`='$cname',`cphone`='$cphone',`cemail`='$cemail',`caddress`='$caddress',`wheel2`='$twowheel',`wheel3`='$threewheel',`wheel4`='$fourwheel',`heavywheel`='$heavyveh',`wheel2price`='$charge2wheel',`wheel3price`='$charge3wheel',`wheel4price`='$charge4wheel',`heavywheelprice`='$chargeHeavywheel',`ownerproof`='$ownerAuth_path',`propertyproof`='$propertyPaper_path',`spotimg`='$spotImgNames',`status`=0,`comment`='null' WHERE `id` = '$id'";

        mysqli_query($con, $q);
        $_SESSION["active"] = 1;
        $_SESSION["edit"] = 1;
        header("location: addplace.php");

    }
?>