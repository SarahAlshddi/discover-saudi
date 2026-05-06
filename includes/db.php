<?php
$conn = mysqli_connect("sql103.infinityfree.com", "if0_41838706", "lXMp0q8OBCDlg", "if0_41838706_discover_saudi");

if (!$conn) {
    die("فشل الاتصال بقاعدة البيانات: " . mysqli_connect_error());
}

mysqli_set_charset($conn, "utf8mb4");
?>
