<?php
$username=$_POST['username'];
$password=$_POST['password'];
if ( $username=='admin' && $password=='1234')
{
    echo "Dang nhap thanh cong";
    session_start();
    $_SESSION['username']=$username;
}
else
{
    echo "Dang nhap that bai";
}
?>