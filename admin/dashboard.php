<?php
session_start();
include "../includes/db.php";

if (!isset($_SESSION["admin"])) {
    header("Location: login.php");
    exit();
}
if (isset($_GET["delete"])) {
    $id = $_GET["delete"];

    mysqli_query($conn, "DELETE FROM regions WHERE id=$id");

    header("Location: dashboard.php?msg=deleted");
    exit();
}

$result = mysqli_query($conn, "SELECT * FROM regions");
?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>لوحة التحكم</title>
<link rel="stylesheet" href="../css/style.css">

</head>
<body id="body">

<nav class="navbar">
    <h2>لوحة التحكم</h2>
    <ul>
        <li><a href="add.php">إضافة محتوى</a></li>
        <li><a href="logout.php">تسجيل الخروج</a></li>
    </ul>
    <button onclick="toggleMode()" style="margin-right: auto;">🌙</button>
</nav>

<section class="admin-container">
    <h1>إدارة المحتوى</h1>
<?php if (isset($_GET["msg"]) && $_GET["msg"] == "deleted") { ?>
    <p class="success-msg">تم حذف السجل بنجاح</p>
<?php } ?>

<?php if (isset($_GET["msg"]) && $_GET["msg"] == "added") { ?>
    <p class="success-msg">تمت إضافة السجل بنجاح</p>
<?php } ?>

<?php if (isset($_GET["msg"]) && $_GET["msg"] == "updated") { ?>
    <p class="success-msg">تم تحديث السجل بنجاح</p>
<?php } ?>
    <table>
        <tr>
            <th>ID</th>
            <th>المنطقة</th>
            <th>التصنيف</th>
            <th>المدينة</th>
            <th>الإجراءات</th>
        </tr>

        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?php echo $row["id"]; ?></td>
                <td><?php echo $row["name"]; ?></td>
                <td><?php echo $row["category"]; ?></td>
                <td><?php echo $row["city"]; ?></td>
                <td>
                    <a class="edit-btn" href="edit.php?id=<?php echo $row['id']; ?>">تعديل</a>
                    <a class="delete-btn" href="dashboard.php?delete=<?php echo $row['id']; ?>" onclick="return confirm('هل أنت متأكد من حذف هذا السجل؟')">حذف</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</section>

<script src="../js/script.js"></script>
</body>
</html>
