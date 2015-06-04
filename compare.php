<?php
require_once('control/html.php');
require_once('control/database.php');
head();
if(isset($_SESSION['label1']) && isset($_SESSION['label2'])){
	$sql="SELECT * FROM camera WHERE model='".$_SESSION['model1']."'";
	$rs = $db->query($sql);
	$row1 = $rs->fetch();
	$sql="SELECT * FROM camera WHERE model='".$_SESSION['model2']."'";
	$rs = $db->query($sql);
	$row2 = $rs->fetch();
	echo '<table class="table table-bordered" style="background:#CCC;">';
	echo '<tr>';
	echo '<td style="max-height:100px;">';
	echo '<img src="img/'.$row1['label'].'/'.$row1['model'].'/main.jpg" style="height:200px;">';
	echo '</td>';
	echo '<td>';
	echo '外觀';
	echo '</td>';
	echo '<td style="max-height:100px;">';
	echo '<img src="img/'.$row2['label'].'/'.$row2['model'].'/main.jpg" style="height:200px;">';
	echo '</td>';
	echo '</tr>';
	$item=array("廠牌","型號","特色","價錢","感光元件","像素","影像品質","最高ISO","ISO純淨度","動態範圍","連拍速度","錄影品質","觸控螢幕","防塵防滴","翻轉螢幕","Wi-Fi","動物","近物","夜景","人像","風景");
	$itemid=array('label','model','feature','price','cmos','resolution','quality','maxiso','isonoise','dynamic','fps','movier','touch','weather','flip','wifi','Animal','Flower','Night','People','Scene');
	for($i=0;$i<16;$i++){
		$a=$row1[$itemid[$i]];
		$b=$row2[$itemid[$i]];
		if($i==0||$i==1||$i==2||$i==3){
			til($row1[$itemid[$i]],$item[$i],$row2[$itemid[$i]]);
		}
		else if($a==$b)
			til($row1[$itemid[$i]],$item[$i],$row2[$itemid[$i]]);
		else if($a>$b)
			win($row1[$itemid[$i]],$item[$i],$row2[$itemid[$i]]);
		else
			lose($row1[$itemid[$i]],$item[$i],$row2[$itemid[$i]]);
	}
	for($i=16;$i<21;$i++)
		picture($row1['label'],$row1['model'],$row2['label'],$row2['model'],$item[$i],$itemid[$i]);
	echo '</table>';
}
else{
	echo '<div style="text-align:center;">請先選擇兩台相機</div>';
}
tail();
function til($x,$y,$z){
	echo '<tr><td>';
	echo $x;
	echo '</td><td>';
	echo $y;
	echo '</td><td>';
	echo $z;
	echo '</td></tr>';
}
function win($x,$y,$z){
	echo '<tr><td class="gold">';
	echo $x;
	echo '</td><td>';
	echo $y;
	echo '</td><td class="silver">';
	echo $z;
	echo '</td></tr>';
}
function lose($x,$y,$z){
	echo '<tr><td class="silver">';
	echo $x;
	echo '</td><td>';
	echo $y;
	echo '</td><td class="gold">';
	echo $z;
	echo '</td></tr>';
}
function picture($l1,$m1,$l2,$m2,$name,$type){
	echo '<tr><td>';
	echo '<img src="img/'.$l1.'/'.$m1.'/'.$type.'.jpg" style="height:250px;">';
	echo '</td><td>';
	echo $name;
	echo '</td><td>';
	echo '<img src="img/'.$l2.'/'.$m2.'/'.$type.'.jpg" style="height:250px;">';
	echo '</td></tr>';
}
?>