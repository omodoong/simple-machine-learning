<?php
$pos = array();
$cluster = array();
$ncluster = array();
$jarakminmaxcluster = array();

//pengisian data
$pos[0] = 5;
echo "<br>indeks ke:0 posisinya:".$pos[0];
for($i=1;$i<20;$i++)
{
	$pos[$i] = $pos[$i-1] + rand(3,10);
	echo "<br>indeks ke:".$i." posisinya:".$pos[$i];	
}

//clustering
$j = 0;
$cluster[0] = "0#";
$ncluster[0] = 1;
$jarakminmaxcluster[0] = 0;
$k = 8;
for($i=1;$i<20;$i++)
{
	$jarak = $pos[$i] - $pos[$i-1];
	if($jarak <= $k)
	{
		$cluster[$j] = $cluster[$j].$i."#";
		$jarakminmaxcluster[$j] = $jarakminmaxcluster[$j] + $jarak;
		$ncluster[$j]++;
	}
	else
	{
		$j++;
		$cluster[$j] = $i."#";
		$ncluster[$j] = 1;
		$jarakminmaxcluster[$j] = 0;
	}
}
echo "<br>-----------------------------------";
//menampilkan cluster
for($i=0;$i<=$j;$i++)
{
	echo "<br>anggota cluster ke:".$i.":".$cluster[$i]." jumlah anggota:".$ncluster[$i]." jarakminmaxnya:".$jarakminmaxcluster[$i];
}
?>