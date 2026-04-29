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
<body>

<nav class="navbar">
    <h2>إضافة منطقة</h2>
    <ul>
        <li><a href="dashboard.php">رجوع</a></li>
    </ul>
</nav>

<section class="login-box">
    <form method="POST">

        <input type="text" name="name" placeholder="اسم المنطقة" required>

        <input type="text" name="category" placeholder="التصنيف (حديثة/ساحلية/تاريخية)" required>

        <input type="text" name="city" placeholder="المدينة" required>

        <textarea name="description" placeholder="الوصف" required></textarea>

        <textarea name="landmarks" placeholder="المعالم" required></textarea>

        <input type="text" name="image" placeholder="مسار الصورة (مثال: images/test.jpg)" required>

        <button type="submit">إضافة</button>

    </form>
</section>

</body>
</html>