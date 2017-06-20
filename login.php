<?php
include 'config.php';
session_start();

if(isset($_SESSION['access_token'])){
    include "layouts/header.php";
    echo "شما قبلا وارد شده اید.";
    include "layouts/footer.php";
}
else {
    header("Location: {$config['sso']}authorize/?client_id={$config['client_id']}&response_type=code&redirect_uri={$config['home']}return.php");
}