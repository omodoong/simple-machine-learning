<?php
$posisi = array();
$status = array();

for($i=0;$i<100;$i++)
{
	$posisi[$i] = rand(1,50);
	$status[$i] = rand(0,1);
	//echo "<br>posisi=".$posisi[$i]." status=".$status[$i];
}

$posisinya = 25;
$k=5;
$n0 = 0;
$n1 = 1;
for($i=0;$i<100;$i++)
{
	$jarak = abs($posisinya - $posisi[$i]);
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

$k=10;
$n0 = 0;
$n1 = 1;
for($i=0;$i<100;$i++)
{
	$jarak = abs($posisinya - $posisi[$i]);
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

$k=15;
$n0 = 0;
$n1 = 1;
for($i=0;$i<100;$i++)
{
	$jarak = abs($posisinya - $posisi[$i]);
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
?>