<?php
include '../config.php';
$admin= new Admin(); //creating admin object to interact with db
$id=$_SESSION['bid'];

if(isset($_POST['add'])){ 
   
    $img=$_POST['b_img'];
    $sugs=$_POST['sug'];
    $target="upload/";
    $img=$target.basename($_FILES['b_img']['name']);
    move_uploaded_file($_FILES['b_img']['tmp_name'],$img);

    $stmt=$admin->cud("INSERT INTO `b_photo`(`bid`,`b_img`,`sug`) VALUES('$id','$img','$sugs')","inserted");
     echo "<script>alert('Uploaded Successfully');window.location='../design_upload.php';</script>";
}
?>