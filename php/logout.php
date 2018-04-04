<?php
session_start();
session_destroy();
header('location : /php/login.php'.ceil($cache->size() / 15));
exit;
//echo "Logged out";
?>