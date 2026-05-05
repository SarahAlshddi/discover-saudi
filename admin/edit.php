<?php
session_start();
include "../includes/db.php";

if (!isset($_SESSION["admin"])) {
    header("Location: login.php");
    exit();
}

$id = $_GET["id"];

$result = mysqli_query($conn, "SELECT * FROM regions WHERE id=$id");
$region = mysqli_fetch_assoc($result);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $category = $_POST["category"];
    $city = $_POST["city"];
    $description = $_POST["description"];
    $landmarks = $_POST["landmarks"];
    $image = $_POST["image"];

    $query = "UPDATE regions SET 
              name='$name',
              category='$category',
              city='$city',
              description='$description',
              landmarks='$landmarks',
              image='$image'
              WHERE id=$id";

    mysqli_query($conn, $query);

    header("Location: dashboard.php?msg=updated");
    exit();
}
?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>تعديل</title>
<link rel="stylesheet" href="../css/style.css">

</head>
<body id="body">

<nav class="navbar">
    <h2>تعديل المنطقة</h2>
      <ul>
        <li><a href="dashboard.php">رجوع</a></li>
        <li><a href="logout.php">تسجيل الخروج</a></li>
    </ul>

    <button type="button" onclick="toggleMode()" style="margin-right: auto;">🌙</button>
</nav>

<section class="login-box">
    <form method="POST">

        <label class="form-label">اسم المنطقة</label>

        <input type="text" name="name" value="<?php echo $region['name']; ?>" required>


        <label for="category">التصنيف</label>

        <select name="category" required>
            <option value="حديثة" <?php if ($region['category'] == 'حديثة') echo 'selected'; ?>>حديثة</option>
            <option value="ساحلية" <?php if ($region['category'] == 'ساحلية') echo 'selected'; ?>>ساحلية</option>
            <option value="تاريخية" <?php if ($region['category'] == 'تاريخية') echo 'selected'; ?>>تاريخية</option>
        </select>

        <label class="form-label">المدينة</label>

        <input id="city" type="text" name="city" value="<?php echo $region['city']; ?>" required>

        <label class="form-label">الوصف</label>

        <textarea name="description"><?php echo $region['description']; ?></textarea>

        <label class="form-label">المعالم</label>

        <textarea name="landmarks"><?php echo $region['landmarks']; ?></textarea>

        <label class="form-label">ارفق صورة</label>

        <input type="text" name="image" value="<?php echo $region['image']; ?>">

        <button type="submit">تحديث</button>

    </form>
</section>

<script src="../js/script.js"></script>
</body>
</html>
