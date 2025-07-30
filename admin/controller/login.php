<?php
include '../config.php';
$admin = new Admin(); //creating admin object to interact with db
if(isset($_POST['submit'])){  //checking login format is submitted
    //retrive 
    $email=$_POST['a_email'];
    $password=$_POST['a_password'];

    $stmt=$admin->ret("SELECT * FROM `admin` WHERE `a_email`='$email' and `a_password`='$password'");
    $row=$stmt->fetch(PDO::FETCH_ASSOC); 
    echo $num=$stmt->rowCount();
    if($num>0){
        $aid=$row['a_id'];
        $_SESSION['a_id']=$aid;
        echo "<script>alert('Login successfull...!');window.location='../index.php'</script>";
    }
    else{
        echo "<script>alert('Incorrect Email or Password, Try Again..!');window.location='../log.php'</script>";   
    // $error = "<p class='alert alert-warning'>Email or Password doesnot match!</p>";
    }
}

?>