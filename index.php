<?php
session_start();
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>نمونه SSO</title>
</head>
<body>
<h1>خوش آمدید</h1>
<ul>
    <?php
    if(isset($_SESSION['access_token'])){
        ?>
        <li><a href="logout.php">خروج</a></li>
        <li><a href="user_info.php">اطلاعات کاربر</a></li>
        <li><a href="isLoggedIn.php">صفحه محافظت شده</a></li>
        <pre>
        <?php
        //print_r($_SESSION);
    }
    else {
    ?>
    <li><a href="login.php">ورود</a></li>
    <li><a href="register.php">عضویت</a></li>
    <li><a href="isLoggedIn.php">صفحه محافظت شده</a></li>
    <?php
    }
    ?>
</ul>
</body>
</html>