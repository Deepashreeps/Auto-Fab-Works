<?php
include '../config.php';
$admin= new Admin(); //creating admin object to interact with db
$id=$_SESSION['mid'];

if(isset($_POST['add'])){ 
    $img=$_POST['m_img'];
    $a=$_POST['assign'];
    $target="upload/";
    $img=$target.basename($_FILES['img']['name']);
    move_uploaded_file($_FILES['img']['tmp_name'],$img);
    

    $stmt=$admin->cud("INSERT INTO `m_pic`(`mid`,`m_img`,`assign`) VALUES('$id','$img','$a')","inserted");
     echo "<script>alert('Uploaded Successfully');window.location='../upload_manufacturer.php';</script>";
}
?>

