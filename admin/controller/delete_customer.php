<?php
include '../config.php';
$admin = new Admin();  // Include database connection

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['c_id'])) {
    $customer_id = intval($_POST['c_id']); // Ensure integer

    // Ensure $admin is initialized
    if (!isset($admin)) {
        die("error");
    }

    // Prepare and execute the delete query
    $stmt = $admin->ret("DELETE FROM `customer` WHERE id = ?", [$cid]);

    if ($stmt) {
        echo "success"; // AJAX will detect this response
    } else {
        echo "error";
    }
} else {
    echo "error";
}
?>
