<?php
include "includes/db.php";

$id = $_GET['id'];

$query = "SELECT * FROM regions WHERE id = $id";
$result = mysqli_query($conn, $query);
$region = mysqli_fetch_assoc($result);

if (!$region) {
    die("المنطقة غير موجودة");
}
?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title><?php echo $region['name']; ?></title>
<link rel="stylesheet" href="css/style.css">
</head>

<body>

<nav class="navbar">
    <h2>🇸🇦 اكتشف السعودية</h2>
    <ul>
        <li><a href="index.php">الرئيسية</a></li>
        <li><a href="gallery.php">معرض المناطق</a></li>
        <li><a href="admin/login.php">دخول المشرف</a></li>
    </ul>
    <button onclick="toggleMode()" style="margin-right: auto;">🌙</button>
</nav>

<section class="hero">
    <h1><?php echo $region['name']; ?></h1>
</section>

<section class="details-box">
    <img src="<?php echo $region['image']; ?>" alt="<?php echo $region['name']; ?>">

    <h2><?php echo $region['city']; ?></h2>

    <h3>معلومات عن المنطقة</h3>
    <p><?php echo $region['description']; ?></p>

    <h3>المعالم</h3>
    <p><?php echo $region['landmarks']; ?></p>
</section>

<script src="js/script.js"></script>
</body>
</html>
