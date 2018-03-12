<?php
$arr_n = array(87,56,48,60,66,85,80,70);
$arr_s = array("B","K","K","K","K","B","B","B");

$maxlow = 56;
$minhigh = 87;
for($i=2;$i<=7;$i++)
{
	if($arr_s[$i] == "B" && $minhigh > $arr_n[$i])
		$minhigh = $arr_n[$i];
	if($arr_s[$i] == "K" && $maxlow < $arr_n[$i])
		$maxlow = $arr_n[$i];
}
$T = ($minhigh + $maxlow)/2;

echo "maxlow=".$maxlow;
echo "<br>minhigh".$minhigh;
echo "<br>threshold=".$T;

$nilai = 70;
if($nilai > $T)
	$status = "B";
else
	$status = "K";
echo "<br>statusnya=".$status;
		

?>