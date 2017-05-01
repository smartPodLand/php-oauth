<?php
include 'config.php';
session_start();
if(isset($_SESSION['access_token'])){
    $url = $config['service'].'user';
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, ["Authorization:Bearer {$_SESSION['access_token']}"]);
    $response = curl_exec($ch);
    curl_close($ch);
    $result = json_decode($response);
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User info</title>
</head>
<body dir="rtl">

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
?>