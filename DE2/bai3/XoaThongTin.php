<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="display: flex; flex-direction: row; align-items: center; justify-content: space-around; color:black;">
<div>
    <?php
    $database_host = 'localhost:3301';
    $username = 'root';
    $password = 'root';
    $database_name='QuanlySV';
    $conn = mysqli_connect($database_host, $username, $password, $database_name);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    else
    {
    $sql = "SELECT MaSV,TenKhoaVien,Lop,HoTen,NgaySinh FROM sinhvien join khoavien on sinhvien.MaKhoaVien = khoavien.MaKhoaVien";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        echo "<table border='1' style='border-radius:3px; border-color:green;'>";
        echo "<tr>";
        echo "<th>MaSV</th>";
        echo "<th>TenKhoaVien</th>";
        echo "<th>Lop</th>";
        echo "<th>HoTen</th>";
        echo "<th>NgaySinh</th>";
        echo "</tr>";
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>".$row['MaSV']."</td>";
            echo "<td>".$row['TenKhoaVien']."</td>";
            echo "<td>".$row['Lop']."</td>";
            echo "<td>".$row['HoTen']."</td>";
            echo "<td>".$row['NgaySinh']."</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
}
    ?>
    </div>
    <div>
<form method="post" style="display:flex; width: 200px; flex-direction: column; justify-content: center; align-items: center; margin-top:40px;">
        <input type="text" name="MaSV" placeholder="Nhap Ma Sinh Vien" required>
        <button type="submit" style="display: block; width: 50px; background-color: slateblue; margin-top: 10px;">Xoa</button>
        </form>
<?php
if(isset($_POST['MaSV'])){
$MaSV = $_POST['MaSV'];
$sql1 = "SELECT MaSV,TenKhoaVien,Lop,HoTen,NgaySinh FROM sinhvien join khoavien on sinhvien.MaKhoaVien = khoavien.MaKhoaVien where MaSV = '$MaSV'";
$result = mysqli_query($conn, $sql1);
echo "<h2>Ban co chac chan muon xoa sinh vien nay?</h2>"."<br>";
if (mysqli_num_rows($result) > 0) {
    echo "<table border='1' style='border-radius:3px; border-color:green;'>";
    echo "<tr>";
    echo "<th>MaSV</th>";
    echo "<th>TenKhoaVien</th>";
    echo "<th>Lop</th>";
    echo "<th>HoTen</th>";
    echo "<th>NgaySinh</th>";
    echo "</tr>";
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>".$row['MaSV']."</td>";
        echo "<td>".$row['TenKhoaVien']."</td>";
        echo "<td>".$row['Lop']."</td>";
        echo "<td>".$row['HoTen']."</td>";
        echo "<td>".$row['NgaySinh']."</td>";
        echo "</tr>";
    }
    echo "</table>";
}
echo "<form method='post' style='display:flex; width: 200px; flex-direction: row; justify-content: space-; align-items: center; margin-top:40px;'>
        <button type='submit' name='OK' style='display: block; width: 100px; background-color: slateblue; margin-top: 10px;'>Dong Y</button>
        <button type='submit' name='KO' style='display: block; width: 50px; background-color: slateblue; margin-top: 10px;'>Huy</button>
        </form>";


if (isset($_POST['OK'])) {
    if (mysqli_query($conn, $sql2)) {
        echo "Xoa thanh cong";
        $conn->close();
    } else {
        echo "Loi ko xoa duoc: " . $sql2 . "<br>" . mysqli_error($conn);
    }
}
$sql2 = "DELETE FROM sinhvien WHERE MaSV = '$MaSV'";
}
?>

    </div>
</body>
</html>