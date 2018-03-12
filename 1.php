<?php
	$arr_x = array(1,2,3,4,5);
	$arr_y = array(5,8,6,10,9);
	
	$arr_m = array();
	$arr_c = array();
	
	//mencari nilai m
	for($i=0;$i<4;$i++)
	{
		$arr_m[$i] = ($arr_y[$i+1]-$arr_y[$i])/($arr_x[$i+1]-$arr_x[$i]);
	}
	$rata_m = 0;
	for($i=0;$i<4;$i++)
	{
		$rata_m = $rata_m + $arr_m[$i];
	}	
	$rata_m = $rata_m/4;
	
	//mencari nilai c
	for($i=0;$i<5;$i++)
	{
		$arr_c[$i] = $arr_y[$i] - $rata_m * $arr_x[$i];
	}
	
	$rata_c = 0;
	for($i=0;$i<5;$i++)
	{
		$rata_c = $rata_c + $arr_c[$i];
	}	
	$rata_c = $rata_c/5;


	
	$x = 50;
	$y = $rata_m * $x + $rata_c;
	echo $y;
	
	
?>