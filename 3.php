<?php
$arr_n = array(80,50,60,70,75,55,65,71,40,56);
$arr_s = array("B","K","S","S","B","K","S","S","K","S");

$bmin = 80;
$smax = 60;
$smin = 60;
$kmax = 50;

for($i=3;$i<=9;$i++)
{
	if($arr_s[$i] == "B" && $bmin > $arr_n[$i]) //bmin
		$bmin = $arr_n[$i];
	if($arr_s[$i] == "S" && $smax < $arr_n[$i]) //smax
		$smax = $arr_n[$i];
	if($arr_s[$i] == "S" && $smin > $arr_n[$i]) //smin
		$smin = $arr_n[$i];
	if($arr_s[$i] == "K" && $kmax < $arr_n[$i]) //kmax
		$kmax = $arr_n[$i];
}
$t1 = ($smax + $bmin)/2;
$t2 = ($kmax + $smin)/2;

$nilai = 70;
if($nilai > $t1)
	$status = "B";
else if($nilai > $t2)
	$status = "S";
else
	$status = "K";
echo "<br>statusnya=".$status;
		

?>