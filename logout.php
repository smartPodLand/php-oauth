<?php
include 'config.php';
session_start();
if(isset($_SESSION['keylead_code'])){
    unset($_SESSION['access_token']);
    unset($_SESSION['refresh_token']);
    unset($_SESSION['keylead_code']);
}
session_destroy();
header("Location: {$config['sso']}logout/");