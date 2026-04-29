<?php
include "includes/db.php";
$result = mysqli_query($conn, "SELECT * FROM regions");
?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>معرض المناطق</title>
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
    <h1>معرض المناطق</h1>
    <p>استكشف أشهر مناطق المملكة العربية السعودية</p>
</section>

<section class="filter-buttons">
    <button onclick="filterRegions('all')">الكل</button>
    <button onclick="filterRegions('تاريخية')">تاريخية</button>
    <button onclick="filterRegions('ساحلية')">ساحلية</button>
    <button onclick="filterRegions('حديثة')">حديثة</button>
</section>

<section class="gallery">

<?php while ($row = mysqli_fetch_assoc($result)) { ?>
    <div class="region-card" data-category="<?php echo $row['category']; ?>">
        <img src="<?php echo $row['image']; ?>" alt="<?php echo $row['name']; ?>">
        <h3><?php echo $row['name']; ?></h3>
        <p><?php echo $row['description']; ?></p>
        <a href="details.php?id=<?php echo $row['id']; ?>">عرض التفاصيل</a>
    </div>
<?php } ?>

</section>

<script src="js/script.js"></script>
</body>
</html>