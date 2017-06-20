<?php
include 'config.php';
session_start();
function getUser($access_token){
    global $config;
    $url = $config['sso_service'].'user';
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, ["Authorization:Bearer {$access_token}"]);
    $response = curl_exec($ch);
    curl_close($ch);
    return json_decode($response);
}
if(isset($_SESSION['access_token'])){

    $result = getUser($_SESSION['access_token']);
    include "layouts/header.php";
?>
    <h1>اطلاعات کاربر</h1>


<ul>
    <li>
        نام کابری:<?=$result->preferred_username?>
    </li>
    <li>
        ایمیل:<?=$result->email?>
    </li>
    <li>
        همراه:<?=$result->phone_number?>
    </li>
    <li>
        <a href="<?=$config['home']?>index.php">بازگشت</a>
    </li>
</ul>
</body>
</html>
<?php
}
else {
    echo "else";
}
include "layouts/footer.php";
?>