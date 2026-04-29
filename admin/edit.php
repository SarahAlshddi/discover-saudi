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
<body>

<nav class="navbar">
    <h2>تعديل المنطقة</h2>
    <ul>
        <li><a href="dashboard.php">رجوع</a></li>
    </ul>
</nav>

<section class="login-box">
    <form method="POST">

        <input type="text" name="name" value="<?php echo $region['name']; ?>" required>

        <input type="text" name="category" value="<?php echo $region['category']; ?>" required>

        <input type="text" name="city" value="<?php echo $region['city']; ?>" required>

        <textarea name="description"><?php echo $region['description']; ?></textarea>

        <textarea name="landmarks"><?php echo $region['landmarks']; ?></textarea>

        <input type="text" name="image" value="<?php echo $region['image']; ?>">

        <button type="submit">تحديث</button>

    </form>
</section>

</body>
</html>