<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Lý Thông Tin</title>
</head>
<body style="display: flex; flex-direction: row; align-items: center; justify-content: space-around; color:black;">
    <div>
        <?php
        require('dbconn.php');
        $conn=getDB();
        $sql_khoavien = "SELECT * FROM khoavien";
        $result_khoavien = mysqli_query($conn, $sql_khoavien);
        if (mysqli_num_rows($result_khoavien) > 0) {
            echo "<h2>Danh Sách Khoa Viện</h2>";
            echo "<table border='1' style='border-radius:3px;'>";
            echo "<tr><th>MaKhoaVien</th><th>TenKhoaVien</th><th>Phone</th><th>Email</th><th>Action</th></tr>";
            while($row = mysqli_fetch_assoc($result_khoavien)) {
                echo "<tr>";
                echo "<td>".$row['MaKhoaVien']."</td>";
                echo "<td>".$row['TenKhoaVien']."</td>";
                echo "<td>".$row['Phone']."</td>";
                echo "<td>".$row['Email']."</td>";
                echo "<td>
                        <form method='post' action='SuaThongTin.php'>
                            <input type='hidden' name='MaKhoaVien' value='".$row['MaKhoaVien']."'>
                            <button type='submit'>Edit</button>
                        </form>
                      </td>";
                echo "</tr>";
            }
            echo "</table>";
        }


        $sql_sinhvien = "SELECT MaSV, TenKhoaVien, Lop, HoTen, NgaySinh FROM sinhvien JOIN khoavien ON sinhvien.MaKhoaVien = khoavien.MaKhoaVien";
        $result_sinhvien = mysqli_query($conn, $sql_sinhvien);
        if (mysqli_num_rows($result_sinhvien) > 0) {
            echo "<h2>Danh Sách Sinh Viên</h2>";
            echo "<table border='1' style='border-radius:3px;'>";
            echo "<tr><th>MaSV</th><th>TenKhoaVien</th><th>Lop</th><th>HoTen</th><th>NgaySinh</th><th>Action</th></tr>";
            while($row = mysqli_fetch_assoc($result_sinhvien)) {
                echo "<tr>";
                echo "<td>".$row['MaSV']."</td>";
                echo "<td>".$row['TenKhoaVien']."</td>";
                echo "<td>".$row['Lop']."</td>";
                echo "<td>".$row['HoTen']."</td>";
                echo "<td>".$row['NgaySinh']."</td>";
                echo "<td>
                        <form method='post' action='XoaThongTin.php' style='display:inline;'>
                            <input type='hidden' name='MaSV' value='".$row['MaSV']."'>
                            <button type='submit'>Delete</button>
                        </form>
                      </td>";
                echo "</tr>";
            }
            echo "</table>";
        }

        mysqli_close($conn);
        ?>
    </div>
</body>
</html>