<?php
include "config.php";
session_start();
if(isset($_SESSION['access_token'])){
    echo "شما وارد شده اید!";
    echo "<br><a href=".$config['home']."index.php>بازگشت</a>";
}
else {
    echo "شما باید وارد شوید.\n\n";
    echo "<br><a href='login.php'>برای دیدن محتوی باید وارد شوید</a>";
}