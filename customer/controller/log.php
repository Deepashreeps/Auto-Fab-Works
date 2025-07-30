<?php
include '../config.php';
$admin = new Admin(); //creating admin object to interact with db
if(isset($_POST['login'])){  //checking login format is submitted
    //retrive 
    $email=$_POST['c_email'];
    $password=$_POST['c_pass'];

    $stmt=$admin->ret("SELECT * FROM `customer` WHERE `c_email`='$email' and `c_pass`='$password'");
    $row=$stmt->fetch(PDO::FETCH_ASSOC); 
    echo $num=$stmt->rowCount();
    if($num>0){
        $cid=$row['c_id'];
        $_SESSION['c_id']=$cid;
        echo "<script>alert('Login successfull...!');window.location='../index.php'</script>";
    }
    else
        echo "<script>alert('Incorrect Email or Password, Try Again..!');window.location='../log.php'</script>";   
}
?>