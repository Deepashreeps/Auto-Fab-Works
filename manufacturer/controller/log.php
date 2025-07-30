<?php
include '../config.php';
$admin = new Admin(); //creating admin object to interact with db
if(isset($_POST['login'])){  //checking login format is submitted
    //retrive 
    $email=$_POST['m_email'];
    $password=$_POST['m_pass'];

    $stmt=$admin->ret("SELECT * FROM `manufacturer` WHERE `m_email`='$email' and `m_pass`='$password'");
    $row=$stmt->fetch(PDO::FETCH_ASSOC); 
    echo $num=$stmt->rowCount();
    if($num>0){
        $mid=$row['m_id'];
        $_SESSION['m_id']=$mid;
        echo "<script>alert('Login successfull...!');window.location='../index.php'</script>";
    }
    else
        echo "<script>alert('Incorrect Email or Password, Try Again..!');window.location='../log.php'</script>";   
}

?>