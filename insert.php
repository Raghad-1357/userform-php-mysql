<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user";

// الاتصال
$conn = new mysqli($servername, $username, $password, $dbname);

// التحقق من الاتصال
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// استقبال البيانات
$name = $_POST['name'];
$age = $_POST['age'];

// إدخال البيانات
$sql = "INSERT INTO users_info (name, age) VALUES ('$name', $age)";
$conn->query($sql);

$conn->close();

// إعادة التوجيه إلى الصفحة الرئيسية
header("Location: index.php");
exit();
?>