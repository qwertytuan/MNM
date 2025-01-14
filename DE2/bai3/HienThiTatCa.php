<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hien thi tat ca thong tin</title>
    <style>
        body {
            display: flex;
            flex-direction: row;
            align-items: flex-start;
            justify-content: space-around;
            color: black;
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            padding: 20px;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            margin: 20px 0;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        tr:hover {
            background-color: #f5f5f5;
        }
        .container {
            width: 45%;
        }
    </style>
</head>
<body>
    <div class="container">
    <?php
    $database_host = 'localhost:3301';
    $username = 'root';
    $password = 'root';
    $database_name='QuanlySV';
    $conn = mysqli_connect($database_host, $username, $password, $database_name);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    } else {
        //hien thi bang trong csdl theo html
        $sql = "SELECT * FROM sinhvien";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            echo "<table>";
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

    <div class="container">
    <?php
    $sql = "SELECT * FROM khoavien";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        echo "<table>";
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