<?php
$conn = mysqli_connect("localhost", "root", "", "discover_saudi", 3307);

if (!$conn) {
    die("فشل الاتصال بقاعدة البيانات: " . mysqli_connect_error());
}

mysqli_set_charset($conn, "utf8mb4");
?>