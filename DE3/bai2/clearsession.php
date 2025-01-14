<?php
session_unset();
session_destroy();
setcookie('username', '', time() - 3600);
header('Location:/bai2/login.html');
?>