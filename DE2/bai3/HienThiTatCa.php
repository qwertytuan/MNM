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
    //hien thi bang trong csdl theo html
    $sql = "SELECT * FROM sinhvien";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        echo "<table border='1' style='border-radius:3px; border-color:green;'>";
        echo "<tr>";
        echo "<th>MaSV</th>";
        echo "<th>MaKhoaVien</th>";
        echo "<th>Lop</th>";
        echo "<th>HoTen</th>";
        echo "<th>NgaySinh</th>";
        echo "</tr>";
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>".$row['MaSV']."</td>";
            echo "<td>".$row['MaKhoaVien']."</td>";
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

    <?php
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
$conn->close();
?>

    </div>  

</body>
</html>