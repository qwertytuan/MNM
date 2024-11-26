<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" style="display:flex; width: 200px; flex-direction: column; justify-content: center; align-items: center;">
        <input type="text" name="SoN" placeholder="Nhap N">
        <button type="submit" style="display: block; width: 50px; background-color: slateblue; margin-top: 10px;">Tinh</button>
    </form>
    <?php
    if (isset($_POST['SoN']) && $_POST['SoN'] > 2)
    {
        $SoN=$_POST['SoN'];
        $sum=0;
        for($i=1; $i<=$SoN; $i=$i+2)
        {
            $sum=$sum+$i;
        }
        echo "<br>";
        echo "<h2>Tong cac so le tu 1 den ". $SoN." la:".$sum."<br>" ;
    }
    else
    {
        echo "<br>";
        echo "<h2>N phai lon hon 2". "<br>";
    }
    ?>
</body>
</html>