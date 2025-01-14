<?php
require('dbconn.php');
$conn=getDB();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $MaSV = $_POST['MaSV'];
    $sql = "DELETE FROM sinhvien WHERE MSV = '$maKhoaVien'";
    if (mysqli_query($conn, $sql)) {
    echo "Xoa thanh cong";
    } else {
        echo "Loi:" . mysqli_error($conn);
    }
    header("Location: QuanLyThongTin.php");
    exit();
}
?>