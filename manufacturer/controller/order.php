<?php
include '../config.php';
$admin= new Admin(); //creating admin object to interact with db
$id=$_SESSION['o_id'];

if(isset($_POST['add'])){ 
   
    $name=$_POST['c_name'];
    $p=$_POST['prog'];   
    
    $stmt=$admin->cud("INSERT INTO `order`(`o_id`, `c_name`, `prog`) VALUES('$id','$name','$p')","inserted");
     echo "<script>alert('Uploaded Successfully');window.location='../order_progress.php';</script>";
}
?>