<?php
session_start();
header('Content-Type: application/json');

$response = ['payment_done' => isset($_SESSION['payment_done']) && $_SESSION['payment_done'] === true];

echo json_encode($response);
?>
