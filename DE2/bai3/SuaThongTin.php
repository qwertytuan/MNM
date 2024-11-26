<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hien thi tat ca thong tin</title>
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
        $sql = "SELECT * FROM khoavien";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
        echo "<table border='1' style='border-radius:3px; '>";
        echo "<tr>";
        echo "<th>MaKhoaVien</th>";
        echo "<th>TenKhoaVien</th>";
        echo "<th>Phone</th>";
        echo "<th>Email</th>";
        echo "</tr>";
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>".$row['MaKhoaVien']."</td>";
            echo "<td>".$row['TenKhoaVien']."</td>";
            echo "<td>".$row['Phone']."</td>";
            echo "<td>".$row['Email']."</td>";
            echo "</tr>";
        }
        echo "</table>";
        }
    }

?>
</div>

<div>
<form method="post" style="display:flex; width: 200px; flex-direction: column; justify-content: center; align-items: center; margin-top:40px;">
        <input type="text" name="MaKhoaVien" placeholder="Nhap Ma Khoa Vien" required>
        <input type="text" name="TenKhoaVien" placeholder="Nhap Ten Khoa Vien" required>
        <input type="text" name="Phone" placeholder="Nhap Phone" required>
        <input type="text" name="Email" placeholder="Nhap Email" required>
        <button type="submit" style="display: block; width: 50px; background-color: slateblue; margin-top: 10px;">Sua</button>
    
<?php
$MaKhoaVien = $_POST['MaKhoaVien'];
$TenKhoaVien = $_POST['TenKhoaVien'];
$Phone= $_POST['Phone'];
$Email = $_POST['Email'];
$sql = "UPDATE khoavien SET TenKhoaVien = '$TenKhoaVien', Phone = '$Phone', Email = '$Email' WHERE MaKhoaVien = '$MaKhoaVien'";
if (mysqli_query($conn, $sql)) {

    echo "Sua thanh cong";
    $conn->close();
} else {
    echo "Loi: " . $sql . "<br>" . mysqli_error($conn);
}
?>
</form>
    </div>  
</body>
</html>