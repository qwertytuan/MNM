<pre>
<?php
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

for($i=0;$i<=10;$i++){  
for($k=10;$k>=$i;$k--){  
echo " ";  
}  
for($j=1;$j<=$i;$j++){  
echo "* ";
}  
echo "<br>";  
}
echo "<br>"; echo "<br>"; echo "<br>"; 
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
for ($i=1; $i<=10; $i++) {
	if ($i % 2 == 1) {
		echo "$i la so le";
		echo "<br/>";
	}
}
echo "<br/>";
$tong=0;
for ($i=1; $i<=10; $i++) {
	if ($i % 2 == 1) {
		$tong=$tong+$i;
	}
}
echo "Tong so le la: $tong";
?>

<?php
$sum=0;
for($i=1;$i<=10;$i++)
{
	$num=1/($i*2);
	$sum=$sum+$num;
}
echo "Tong la: $sum";

?>

<?php
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
