<?php
include "config.php";
header("Location: {$config['sso']}authorize/?client_id={$config['client_id']}&response_type=code&redirect_uri={$config['home']}/return.php&prompt=signup");