<?php
$conn = new mysqli("localhost", "root", "", "user");

$id = $_POST['id'];

// الحصول على الحالة الحالية
$result = $conn->query("SELECT status FROM users_info WHERE id = $id");
$row = $result->fetch_assoc();
$currentStatus = $row['status'];

// تبديل الحالة
$newStatus = $currentStatus == 1 ? 0 : 1;

$conn->query("UPDATE users_info SET status = $newStatus WHERE id = $id");

$conn->close();
header("Location: index.php");
exit();
?>