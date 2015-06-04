<?php
require_once('control/html.php');
head();
echo '<div style="background:#000;">';
$Canon=array("5D3","6D","700D","70D","M3");
$Nikon=array("D5500","D610","D7200","D810","V3");
$Sony=array("A5100","A6000","A7R","A7S","A99");
$Pentax=array("645D","K-3","K-50","K-5lls","Q7");
$Fujifilm=array("X-A1","X-E2","X-M1","X-Pro1","X-T1");
$photo=array("Animal","Flower","Night","People","Scene");
for($i=0;$i<96;$i++){
	$rnd1=rand(0,4);
	$rnd2=rand(0,4);
	$rnd3=rand(0,4);
	switch ($rnd1) {
		case 0:
		$label="Canon";
		$model=$Canon[$rnd2];
		break;
		case 1:
		$label="Nikon";
		$model=$Nikon[$rnd2];
		break;
		case 2:
		$label="Sony";
		$model=$Sony[$rnd2];
		break;
		case 3:
		$label="Pentax";
		$model=$Pentax[$rnd2];
		break;
		case 4:
		$label="Fujifilm";
		$model=$Fujifilm[$rnd2];
		break;
	}
	echo '<a href="info.php?label='.$label.'&model='.$model.'"><img src="img/'.$label.'/'.$model.'/'.$photo[$rnd3].'.jpg" style="width:25%; padding-left:3px;"></a>';
}
echo '</div>';

tail();
echo '<div id="seesee">';
echo '<a class="btn btn-info" onclick="location.reload() ">隨機</a>';
echo '</div>';
?>