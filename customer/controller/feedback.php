<?php include '../config.php';
$admin =new Admin();

if (isset($_POST['sub'])){

$n = $_POST['f_name'];
$e = $_POST['f_email'];
$m = $_POST['f_msg'];
$c = $_SESSION['c_id'];

$stmt = $admin->cud("INSERT INTO `feedback`( `f_name`, `f_email`, `c_id`, `f_msg`) VALUES ('$n','$e','$c','$m')","success");

echo "<script> alert('Feedback Sent Successfully');window.location.href='../feedback.php';</script>";
    

}
?>