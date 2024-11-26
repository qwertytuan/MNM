<?php
setcookie("admin", "", time() - 3600);
session_destroy();
header("Location: login.html");
exit();
?>