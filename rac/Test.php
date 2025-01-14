
<pre>
	
<?php
// Chu nhat dac


for ($n = 1; $n <= 10; $n++) {
	for($i=1;$i <= 10;$i++)
	{
		echo "*";
	}
	echo "<br/>";
}

echo "<br/>";
echo "<br/>";
echo "<br/>";
// chu nhat rong
for($i = 1;$i<=10;$i++){
	for($j=1;$j <=10;$j++)
	{
		if($i==1||$i==10||$j==1||$j==10)
		{
			echo "*";
		}
		else{
			echo  " ";
		}

	}
	echo "<br/>";
}
echo "<br/>";
echo "<br/>";
echo "<br/>";

// tma giac
for($i=0;$i<=10;$i++){  
for($k=10;$k>=$i;$k--){  
echo " ";  
}  
for($j=1;$j<=$i;$j++){  
echo "* ";
}  
echo "<br>";  
}
echo "<br>"; 
echo "<br>"; 
echo "<br>"; 
// Tam giac
for($i=1;$i<=10;$i++){  
for($k=1;$k<=10;$k++){ 
	$o=$i*$k;
	echo "$i * $k = $o";
	echo "<br/>";
}
echo "<br/>";
}

?>
</pre>

<pre>
<?php
// so le tu 1 den 10
for ($i=1; $i<=10; $i++) {
	if ($i % 2 == 1) {
		echo "$i la so le";
		echo "<br/>";
	}
}
echo "<br/>";
// Tinh tong cac so le tu 1 den 10
$tong=0;
for ($i=1; $i<=10; $i++) {
	if ($i % 2 == 1) {
		$tong=$tong+$i;
	}
}
echo "Tong so le la: $tong";
?>

<?php
// Tinh tong cac so chan tu 1 den 10
$sum=0;
for($i=1;$i<=10;$i++)
{
	$num=1/($i*2);
	$sum=$sum+$num;
}
echo "Tong la: $sum";

?>

<?php
//
echo "<br/>";
$sum=0;
for($i=1;$i<=10;$i++)
{
	$num=((-1)^(($i-1))*$i);
	$sum=$sum+$num;
}
echo "Tong la: $sum";
echo "<br/>";
?>
</pre>

<!-- Giai thua n -->
<?php

function factorial($n) {
    if ($n == 0) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}

// Example usage
$n = 5;
$result = factorial($n);
echo "Giai thừa của " . $n . " là: " . $result . "\n"; 

?>

<!-- fibonaxi thu n -->
<?php

function fibonacci($n) {
    if ($n <= 1) {
        return $n;
    } else {
        return fibonacci($n - 1) + fibonacci($n - 2);
    }
}
$n = 6;
$result = fibonacci($n);
echo "Số Fibonacci thứ " . $n . " là: " . $result . "\n";

?>
<!-- tổng các số fibonaxi từ 1 đến n -->
<?php

function sum_fibonacci($n) {
    if ($n <= 0) {
        return 0;
    } else {
        return fibonacci($n) + sum_fibonacci($n - 1);
    }
}

$n = 5;
$result = sum_fibonacci($n);
echo "Tổng các số Fibonacci từ 1 đến " . $n . " là: " . $result . "\n";

?>