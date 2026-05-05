<?php
session_start();
include "../includes/db.php";

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $query = "SELECT * FROM admins WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $_SESSION["admin"] = $username;
        header("Location: dashboard.php");
        exit();
    } else {
        $error = "اسم المستخدم أو كلمة المرور غير صحيحة";
    }
}
?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>تسجيل دخول المشرف</title>
<link rel="stylesheet" href="../css/style.css">

</head>
<body class="login-page">
<nav class="navbar">
    <h2>لوحة المشرف</h2>
    <ul>
        <li><a href="../index.php">الرئيسية</a></li>
    </ul>
<button onclick="toggleMode()" class="mode-btn">🌙</button>
</nav>
<section class="login-box">
    <h2>تسجيل دخول المشرف</h2>

    <?php if ($error != "") { ?>
        <p class="error-msg"><?php echo $error; ?></p>
    <?php } ?>

    <form method="POST">
        <label>اسم المستخدم</label>
        <input type="text" name="username" required>

        <label>كلمة المرور</label>
        <input type="password" name="password" required>

        <button type="submit">دخول</button>
    </form>
</section>
<script src="../js/script.js"></script>
</body>
<footer class="footer">
    <p>© اكتشف السعودية - جامعة الملك سعود</p>
</footer>
</html>
