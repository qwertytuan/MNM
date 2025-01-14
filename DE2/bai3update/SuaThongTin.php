<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Khoa Vien</title>
</head>
<body>
    <?php
        require('dbconn.php');
        $conn=getDB();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $maKhoaVien = $_POST['MaKhoaVien'];
        $sql = "SELECT * FROM khoavien WHERE MaKhoaVien = '$maKhoaVien'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
    }

    if (isset($_POST['update'])) {
        $maKhoaVien = $_POST['MaKhoaVien'];
        $tenKhoaVien = $_POST['TenKhoaVien'];
        $phone = $_POST['Phone'];
        $email = $_POST['Email'];

        $update_sql = "UPDATE khoavien SET TenKhoaVien='$tenKhoaVien', Phone='$phone', Email='$email' WHERE MaKhoaVien='$maKhoaVien'";
        if (mysqli_query($conn, $update_sql)) {
            header("Location: QuanLyThongTin.php");
            exit();
        } else {
            echo "Loi " . mysqli_error($conn);
        }
    }
    ?>

    <h2>Edit Khoa Vien</h2>
    <form method="post" action="">
        <input type="hidden" name="MaKhoaVien" value="<?php echo $row['MaKhoaVien']; ?>">
        <label for="TenKhoaVien">Tên Khoa Viện:</label>
        <input type="text" name="TenKhoaVien" value="<?php echo $row['TenKhoaVien']; ?>" required><br>
        <label for="Phone">Phone:</label>
        <input type="text" name="Phone" value="<?php echo $row['Phone']; ?>" required><br>
        <label for="Email">Email:</label>
        <input type="email" name="Email" value="<?php echo $row['Email']; ?>" required><br>
        <button type="submit" name="update">Update</button>
    </form>
</body>
</html>