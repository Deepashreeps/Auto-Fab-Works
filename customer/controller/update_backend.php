<?php
include '../config.php';
$admin= new Admin();
$cid=$_SESSION['c_id'];
if(isset($_POST['update'])){

    $name=$_POST['c_username'];
    $phoneno=$_POST['c_phone'];
    $email=$_POST['c_email'];
    $password=$_POST['c_pass'];
    $address=$_POST['c_address'];

    $target="upload/";
    $imgpath=$target.basename($_FILES['c_img']['name']);
    move_uploaded_file($_FILES['c_img']['tmp_name'],$imgpath);

    $stmt=$admin->cud("UPDATE `customer` SET `c_username`='$name',`c_phone`='$phoneno',`c_email`='$email',`c_pass`='$password',`c_address`='$address',`c_img`='$imgpath' where `c_id`='$cid'","Updated");
    echo "<script>alert('Updated');window.location='../profile.php'</script>";
}

?>