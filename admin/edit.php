<?php
session_start();
include "../includes/db.php";

if(!isset($_SESSION["admin"])){
    header("Location: login.php");
    exit();  }

$id = $_GET["id"];



$result = mysqli_query($conn, "SELECT * FROM regions WHERE id=$id");
$region = mysqli_fetch_assoc($result);

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name=$_POST["name"];
    $category=$_POST["category"];
    $city= $_POST["city"];
    $description= $_POST["description"];
    $features = $_POST["features"];
    $activities= $_POST["activities"];
    $landmarks= $_POST["landmarks"];
    $image= $_POST["image"];
    $gallery_image1 =$_POST["gallery_image1"];
    $gallery_image2 =$_POST["gallery_image2"];
    $gallery_image3 =$_POST["gallery_image3"];

    $query="UPDATE regions SET 
                name='$name',
                category='$category',
                city='$city',
                description='$description',
                features='$features',
                activities='$activities',
                landmarks='$landmarks',
                image='$image',
                gallery_image1='$gallery_image1',
                gallery_image2='$gallery_image2',
                gallery_image3='$gallery_image3'
              WHERE id=$id";

    
    
    mysqli_query($conn, $query);
    header("Location: dashboard.php?msg=updated");
    exit();   }
?>




<!DOCTYPE html>
<html lang="ar"dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>تعديل</title>
<link rel="stylesheet"href="../css/style.css">

</head>
<body id="body">
<nav class="navbar">
    <h2>تعديل المنطقة</h2>
      <ul>
        <li><a href="dashboard.php">رجوع</a></li>
        <li><a href="logout.php">تسجيل الخروج</a></li>
    </ul>
<button onclick="toggleMode()" class="mode-btn">🌙</button></nav>

    
    
<section class="login-box">
<form method="POST">

    <label>اسم المكان /المنطقة</label>
    <input type="text"name="name" value= "<?php echo $region['name']; ?>" required>

    
<label>الصورة الرئيسية</label>
<input type="text"name="image" value= "<?php echo $region['image']; ?>" required>

    
    <label>الوصف</label>
    <textarea name= "description" required><?php echo $region['description']; ?></textarea>

    
    
<label class="form-label">الموقع</label>
<select name="city" required>
    <option value="" disabled hidden>اختر الموقع</option>

    
    <option value="وسطى"<?php if($region['city'] =='وسطى')echo 'selected'; ?>>وسطى</option>
    <option value="غربية"<?php if ($region['city'] =='غربية')echo 'selected'; ?>>غربية</option>
    <option value="جنوبية" <?php if($region['city']=='جنوبية') echo 'selected'; ?>>جنوبية</option>
    <option value="شمالية" <?php if($region['city'] == 'شمالية') echo'selected';?>>شمالية</option>
    <option value="شرقية"<?php if($region['city']=='شرقية')echo'selected'; ?>>شرقية</option>

    
</select>


    <label>التصنيف</label>
    <select name="category" required>
        <option value="حديثة" <?php if($region['category']=='حديثة') echo'selected'; ?>>حديثة</option>
        <option value="ساحلية" <?php if($region['category']=='ساحلية')echo 'selected'; ?>>ساحلية</option>
        <option value="تاريخية" <?php if ($region['category']=='تاريخية') echo 'selected'; ?>>تاريخية</option></select>

<label>المميزات</label>
<textarea name="features"><?php echo $region['features']; ?></textarea>

<label>الأنشطة</label>
<textarea name="activities"><?php echo $region['activities']; ?></textarea>

    <label>المعالم</label>
    <textarea name="landmarks"><?php echo $region['landmarks']; ?></textarea>

    <label>صورة المعرض الأولى</label>
    <input type="text" name="gallery_image1" value="<?php echo $region['gallery_image1']; ?>">

<label>صورة المعرض الثانية</label>
<input type="text" name="gallery_image2" value="<?php echo $region['gallery_image2']; ?>">

    <label>صورة المعرض الثالثة</label>
    <input type="text" name="gallery_image3" value="<?php echo $region['gallery_image3']; ?>">
<button type="submit">تحديث</button>

</form></section>

    
    
<script src="../js/script.js"></script>
</body>
<footer class="footer">
    <p>اكتشف السعودية - جامعة الملك سعود</p>
</footer>
</html>
