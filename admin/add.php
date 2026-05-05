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
    $landmarks = $_POST["landmarks"];
    $image = $_POST["image"];

    $query = "INSERT INTO regions (name, category, city, description, landmarks, image)
              VALUES ('$name', '$category', '$city', '$description', '$landmarks', '$image')";

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

    <button type="button" onclick="toggleMode()" style="margin-right: auto;">🌙</button>
</nav>

<section class="login-box">
    <form method="POST">

        <label class="form-label">اسم المنطقة</label>

        <input type="text" name="name" placeholder="مثال الدرعية" required>

        <label for="category" class="form-label">التصنيف</label>

        <select id="category" name="category" required>
            <option value="" disabled selected>اختر التصنيف</option>
            <option value="حديثة">حديثة</option>
            <option value="ساحلية">ساحلية</option>
            <option value="تاريخية">تاريخية</option>
        </select>

        <label class="form-label">المدينة</label>

        <input type="text" name="city" placeholder="مثال الرياض" required>

        <label class="form-label">الوصف</label>

        <textarea name="description" placeholder="اكتب هنا وصف المنطقة" required></textarea>

        <label class="form-label">المعالم</label>

        <textarea name="landmarks" placeholder="اكتب اسم المعالم" required></textarea>

        <label class="form-label">ارفق صورة</label>

        <input type="text" name="image" placeholder="مسار الصورة (مثال: images/test.jpg)" required>

        <button type="submit">إضافة</button>

    </form>
</section>

<script src="../js/script.js"></script>

</body>
</html>
