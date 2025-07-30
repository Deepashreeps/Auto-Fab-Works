<?php
include '../config.php';
$admin= new Admin();
$hid=$_SESSION['a_id'];
if(isset($_POST['update'])){

    $admin_name=$_POST['a_name'];
    $admin_phoneno=$_POST['a_phone'];
    $admin_email=$_POST['a_email'];
    $admin_password=$_POST['a_password'];
    
    $target="upload/";
    $imgpath=$target.basename($_FILES['a_img']['name']);
    move_uploaded_file($_FILES['a_img']['tmp_name'],$imgpath);

    $stmt=$admin->cud("UPDATE `admin` SET `a_name`='$admin_name',`a_phone`='$admin_phoneno',`a_email`='$admin_email',`a_password`='$admin_password',`a_img`='$imgpath' where `a_id`='$aid'","Updated");
    echo "<script>alert('Updated');window.location='../profile.php'</script>";
}

?>