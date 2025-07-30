<?php
include '../config.php';
$admin= new Admin(); //creating admin object to interact with db

if(isset($_POST['submit'])){
    $name=$_POST['m_username'];
    $phone=$_POST['m_phone'];
    $email=$_POST['m_email'];
    $password=$_POST['m_pass'];
    $address=$_POST['m_address'];

    $stmt1=$admin->ret("SELECT * FROM `manufacturer` WHERE `m_email`='$email'");

    $row=$stmt1->fetch(PDO::FETCH_ASSOC); //iterates the record
    $num=$stmt1->rowCount();
    if($num>0){
        echo "<script>alert('Email is already in use!');window.location='../registration.html'</script>";   
  
}
else {
   
    $stmt=$admin->cud("INSERT INTO `manufacturer`(`m_username`,`m_phone`,`m_email`,`m_pass`,`m_address`)VALUE('$name','$phone','$email','$password','$address')","inserted");
     echo "<script>alert('Registered Successfully.....!');window.location='../log.php'</script>";
}}
?>