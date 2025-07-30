<?php
session_start();
include '../config.php';
$admin = new Admin();

if (isset($_POST['pay'])) {
    $n = $_POST['c_name'];
    $e = $_POST['c_email'];
    $p = $_POST['c_phone'];
    $a = $_POST['amount'];
    $c = $_POST['cardNumber'];

    // Insert into DB
    $stmt = $admin->cud("INSERT INTO `pay`(`c_name`, `c_email`, `c_phone`, `amount`, `cardNumber`) VALUES ('$n','$e','$p','$a','$c')", "success");

    $_SESSION['payment_done'] = true;

    // Redirect back to upload page
    echo "<script>alert('Payment Successfully done.'); window.location.href='../design_upload.php';</script>";
}
?>
