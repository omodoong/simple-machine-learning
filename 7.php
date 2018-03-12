<?php
$px = array();
$py = array();
$status = array();

for($i=0;$i<100;$i++)
{
	$px[$i] = rand(1,50);
	$py[$i] = rand(1,50);
	$status[$i] = rand(0,1);
	//echo "<br>posisi=".$posisi[$i]." status=".$status[$i];
}

$posisinya_x = 25;
$posisinya_y = 40;
$k=10;
$n0 = 0;
$n1 = 1;
for($i=0;$i<100;$i++)
{
	$jarak = sqrt(pow($posisinya_x - $px[$i],2) + pow($posisinya_y - $py[$i],2));
	if($jarak <= $k)
	{
		if($status[$i] == 0)
			$n0++;
		else
			$n1++;
	}
}
echo "<br>jumlah nilai 0=".$n0;
echo "<br>jumlah nilai 1=".$n1;

//stokastik
$total = $n0 + $n1;
$acak = rand(0,$total);
if($acak <= $n0)
	echo "<br>tebakannya 0";
else
	echo "<br>tebakannya 1";
?>