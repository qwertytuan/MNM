<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="display: flex; flex-direction: column; align-items: center; justify-content: center;">
    <?php
    echo "<div style='background-color:blue; display: flex; flex-direction: column; align-items: center; justify-content: center;'>";
include('header.php');
echo "</div>";
echo "<hr>";
echo "<div style='background-color:green; display: flex; flex-direction: column; align-items: center; justify-content: center;'>";
include('menu.php');
echo "</div>";
echo "<hr>";
echo "<div style='background-color:red; color:white; display: flex; flex-direction: column; align-items: center; justify-content: center;'>";
include('footer.php');
echo "</div>";
?>
</body>
</html>