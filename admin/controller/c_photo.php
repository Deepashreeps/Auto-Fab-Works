<?php
include '../config.php';
$admin = new Admin();
$pid = $_SESSION['p_id'];

if (isset($_POST['add'])) {
    $a = $_POST['p_name'];
    $target = "upload/";

    $fileName = $_FILES['p_img']['name'];
    $fileTmp = $_FILES['p_img']['tmp_name'];
    $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
    $allowed = ['stl'];

    // Validate extension and MIME type
    $finfo = finfo_open(FILEINFO_MIME_TYPE);
    $mimeType = finfo_file($finfo, $fileTmp);
    finfo_close($finfo);

    if (in_array($fileExt, $allowed) && $mimeType === 'application/sla') {
        $img = $target . basename($fileName);
        move_uploaded_file($fileTmp, $img);

        $stmt = $admin->cud("INSERT INTO photo(p_id, p_img, p_name) VALUES('$pid', '$img', '$a')", "inserted");
        echo "<script>alert('STL File Uploaded Successfully'); window.location='../upload_Customer.php';</script>";
    } else {
        echo "<script>alert('Only STL files are allowed!'); window.location='../upload_Customer.php';</script>";
    }
}
?>