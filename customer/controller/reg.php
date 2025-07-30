<?php
include '../config.php';
$admin= new Admin(); //creating admin object to interact with db

if(isset($_POST['submit'])){
    $name=$_POST['c_username'];
    $phone=$_POST['c_phone'];
    $email=$_POST['c_email'];
    $password=$_POST['c_pass'];
    $address=$_POST['c_address'];

    $stmt1=$admin->ret("SELECT * FROM `customer` WHERE `c_email`='$email'");

    $row=$stmt1->fetch(PDO::FETCH_ASSOC); //iterates the record
    $num=$stmt1->rowCount();
    if($num>0){
        echo "<script>alert('Email is already in use!');window.location='../reg.php'</script>";   
  
}
else {
   
    $stmt=$admin->cud("INSERT INTO `customer`(`c_username`,`c_phone`,`c_email`,`c_pass`,`c_address`)VALUE('$name','$phone','$email','$password','$address')","inserted");
     echo "<script>alert('Registered Successfully...!');window.location='../log.php'</script>";
}}
?>