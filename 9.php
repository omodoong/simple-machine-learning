<?php
$input = array();
$w = array();
$lr = 0.05;
$target = 1;
$threshold = 5;

$sum = 0;
for($i=0;$i<14;$i++)
{
	$input[$i] = 1;
	$w[$i] = rand(-100,100)/100;
	$sum = $sum + $input[$i] * $w[$i];
}
if($sum < $threshold)
	$output = 0;
else
	$output = 1;
$err = $target - $output;
echo "<br>$err";
$epoch = 0;
while($err == 1)
{
	$epoch++;
	for($i=0;$i<14;$i++)
	{
		$w[$i] = $w[$i] + $lr * $input[$i] * $err;
		$sum = $sum + $input[$i] * $w[$i];
	}	
	if($sum < $threshold)
		$output = 0;
	else
		$output = 1;
	$err = $target - $output;
	echo "<br>$err";	
}
echo "ini lho epochnya:".$epoch;
?>