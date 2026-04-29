<?php
$id = $_GET['id'];

// بيانات مؤقتة (بعدين بنربطها بالداتابيس)
$regions = [
    1 => ["name" => "الرياض", "desc" => "عاصمة المملكة ومركزها الإداري", "img" => "images/riyadh.jpg"],
    2 => ["name" => "جدة", "desc" => "مدينة ساحلية جميلة على البحر الأحمر", "img" => "images/jeddah.jpg"],
    3 => ["name" => "العلا", "desc" => "منطقة تاريخية تحتوي على آثار قديمة", "img" => "images/alula.jpg"]
];

$region = $regions[$id];
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
    </ul>
    <button onclick="toggleMode()">🌙</button>
</nav>

<section class="hero">
    <h1><?php echo $region['name']; ?></h1>
</section>

<section style="text-align:center; padding:40px;">
    <img src="<?php echo $region['img']; ?>" width="300">
    <p><?php echo $region['desc']; ?></p>
</section>

<script src="js/script.js"></script>
</body>
</html>