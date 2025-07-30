<?php include '../config.php';
$admin =new Admin();

if (isset($_POST['sub'])){

$n = $_POST['m_name'];
$e = $_POST['inv'];

$stmt = $admin->cud("INSERT INTO `inventory`( `m_name`, `inv`) VALUES ('$n','$e')","success");

echo "<script> alert('Inventory Added Successfully');window.location.href='../add_inventory.php';</script>";
    

}
?>