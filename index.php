<?php
session_start();
include "layouts/header.php";

?>
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
<?php
include "layouts/footer.php";