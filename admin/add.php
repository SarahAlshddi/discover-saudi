<?php
session_start();
include "../includes/db.php";

if (!isset($_SESSION["admin"])) {
    header("Location: login.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $category = $_POST["category"];
    $city = $_POST["city"];
    $description = $_POST["description"];
    $features = $_POST["features"];
    $activities = $_POST["activities"];
    $landmarks = $_POST["landmarks"];
    $image = $_POST["image"];
    $gallery_image1 = $_POST["gallery_image1"];
    $gallery_image2 = $_POST["gallery_image2"];
    $gallery_image3 = $_POST["gallery_image3"];

    $query = "INSERT INTO regions 
              (name, category, city, description, features, activities, landmarks, image, gallery_image1, gallery_image2, gallery_image3)
              VALUES 
              ('$name', '$category', '$city', '$description', '$features', '$activities', '$landmarks', '$image', '$gallery_image1', '$gallery_image2', '$gallery_image3')";

    mysqli_query($conn, $query);

    header("Location: dashboard.php?msg=added");
    exit();
}

?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>إضافة محتوى</title>
<link rel="stylesheet" href="../css/style.css">


</head>
<body id="body">

<nav class="navbar">
    <h2>إضافة منطقة</h2>

    <ul>
        <li><a href="dashboard.php">رجوع</a></li>
        <li><a href="logout.php">تسجيل الخروج</a></li>
    </ul>

<button onclick="toggleMode()" class="mode-btn">🌙</button>
</nav>

<section class="login-box">
<form method="POST">

    <label class="form-label">اسم المكان / المنطقة</label>
    <input type="text" name="name" placeholder="مثال: نيوم" required>

    <label class="form-label">الصورة الرئيسية للمكان</label>
    <input type="text" name="image" placeholder="مثال: images/neom.jpg" required>

    <label class="form-label">الوصف</label>
    <textarea name="description" placeholder="اكتب وصف المكان" required></textarea>

    <label class="form-label">الموقع</label>
    <select name="city" required>
        <option value="" disabled selected hidden>اختر المنطقة</option>
<option value="وسطى">وسطى</option>
<option value="غربية">غربية</option>
<option value="جنوبية">جنوبية</option>
<option value="شمالية">شمالية</option>
<option value="شرقية">شرقية</option>
    </select>

    <label class="form-label">التصنيف</label>
    <select name="category" required>
        <option value="" disabled selected hidden>اختر التصنيف</option>
        <option value="حديثة">حديثة</option>
        <option value="ساحلية">ساحلية</option>
        <option value="تاريخية">تاريخية</option>
    </select>

    <label class="form-label">المميزات</label>
    <textarea name="features" placeholder="مثال: تصميم حديث، إطلالة بحرية، موقع مميز" required></textarea>

    <label class="form-label">الأنشطة</label>
    <textarea name="activities" placeholder="مثال: التصوير، المشي، زيارة المعالم" required></textarea>

    <label class="form-label">المعالم</label>
    <textarea name="landmarks" placeholder="اكتب المعالم وافصل بينها بفاصلة" required></textarea>

    <label class="form-label">صورة المعرض الأولى</label>
    <input type="text" name="gallery_image1" placeholder="مثال: images/neom1.jpg">

    <label class="form-label">صورة المعرض الثانية</label>
    <input type="text" name="gallery_image2" placeholder="مثال: images/neom2.jpg">

    <label class="form-label">صورة المعرض الثالثة</label>
    <input type="text" name="gallery_image3" placeholder="مثال: images/neom3.jpg">

    <button type="submit">إضافة</button>

</form>
</section>

<script src="../js/script.js"></script>

</body>
<footer class="footer">
    <p>© اكتشف السعودية - جامعة الملك سعود</p>
</footer>
</html>
