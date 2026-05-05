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
<button onclick="toggleMode()" class="mode-btn">🌙</button></nav>

<section class="hero">
    <h1><?php echo $region['name']; ?></h1>
</section>

<section class="details-box">

<img class="main-details-img" src="<?php echo $region['image']; ?>" alt="<?php echo $region['name']; ?>">

<h2><?php echo $region['name']; ?></h2>
<p class="region-location"><?php echo $region['city']; ?></p>

    <h3>معلومات عن المنطقة</h3>
    <p><?php echo $region['description']; ?></p>

    <div class="info-box">


<h3>المميزات</h3>
<ul>
<?php
$text = str_replace("،", ",", $region['features']);
$items = explode(",", $text);

foreach ($items as $item) {
    $item = trim($item);
    if ($item !== "") {
        echo "<li>" . $item . "</li>";
    }
}
?>
</ul>

<h3>الأنشطة</h3>
<ul>
<?php
$text = str_replace("،", ",", $region['activities']);
$items = explode(",", $text);

foreach ($items as $item) {
    $item = trim($item);
    if ($item !== "") {
        echo "<li>" . $item . "</li>";
    }
}
?>
</ul>

<h3>أبرز المعالم</h3>
<ul>
<?php
$text = str_replace("،", ",", $region['landmarks']);
$items = explode(",", $text);

foreach ($items as $item) {
    $item = trim($item);
    if ($item !== "") {
        echo "<li>" . $item . "</li>";
    }
}
?>
</ul>


    </div>

<div class="details-gallery">
<?php if (!empty($region['gallery_image1'])): ?>
    <img src="<?php echo $region['gallery_image1']; ?>" alt="">
<?php endif; ?>

<?php if (!empty($region['gallery_image2'])): ?>
    <img src="<?php echo $region['gallery_image2']; ?>" alt="">
<?php endif; ?>

<?php if (!empty($region['gallery_image3'])): ?>
    <img src="<?php echo $region['gallery_image3']; ?>" alt="">
<?php endif; ?>

</div>

</section>

<script src="js/script.js"></script>
</body>
<footer class="footer">
    <p>© اكتشف السعودية - جامعة الملك سعود</p>
</footer>
</html>
