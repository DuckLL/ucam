<?php
require_once('control/html.php');
require_once('control/database.php');
head();
$label=htmlspecialchars($_GET[label]);
$model=htmlspecialchars($_GET[model]);
$sql="SELECT * FROM camera WHERE label='".$label."' && model='".$model."'";
$rs = $db->query($sql);
while($row = $rs->fetch()){
	echo '<script src="js/gotitem.js"></script>';
	echo '<script src="//cdn.ckeditor.com/4.4.7/full/ckeditor.js"></script>';
	echo '<div class="col-xs-4">';
	echo '<img src="img/'.$row[label].'/'.$row[model].'/main.jpg" style="width:100%;">';
	echo '<a class="btn btn-success" onclick="item(1,\''.$row[label].'\',\''.$row[model].'\')">比較一</a>';
	echo '<a class="btn btn-info" onclick="item(2,\''.$row[label].'\',\''.$row[model].'\')">比較二</a>';
	echo '<a class="btn btn-warning" onclick="history.back()">返回</a>';	
	echo '<a target="_blank" class="btn btn-primary" href='.$row[shop].'>賣場</a>';
	echo '<img src="img/'.$row[label].'/'.$row[model].'/Animal.jpg" style="width:100%; padding-top:10px;">';
	echo '<img src="img/'.$row[label].'/'.$row[model].'/Flower.jpg" style="width:100%; padding-top:10px;">';
	echo '<img src="img/'.$row[label].'/'.$row[model].'/Night.jpg" style="width:100%; padding-top:10px;">';
	echo '<img src="img/'.$row[label].'/'.$row[model].'/People.jpg" style="width:100%; padding-top:10px;">';
	echo '<img src="img/'.$row[label].'/'.$row[model].'/Scene.jpg" style="width:100%; padding-top:10px;">';
	echo '</div>';
	echo '<div class="col-xs-8" style="background:#DDD">';
	$item=array("廠牌","型號","特色","價錢","感光元件","像素","影像品質","最高ISO","ISO純淨度","動態範圍","連拍速度","錄影品質","觸控螢幕","防塵防滴","翻轉螢幕","Wi-Fi");
	$itemid=array('label','model','feature','price','cmos','resolution','quality','maxiso','isonoise','dynamic','fps','movier','touch','weather','flip','wifi');
	for($i=0;$i<16;$i++){
		echo '<div class="col-xs-3 block" style="background:#FFF;">'.$item[$i].'：</div>';
		if($i==11){
			if($row[movier]==1080 && $row[moviep]>30)
				echo '<div class="col-xs-8 gold">'.$row[movier].'/'.$row[moviep].'p</div>';
			else
				echo '<div class="col-xs-8 gold">'.$row[movier].'/'.$row[moviep].'p</div>';
		}
		else if(
			($i==0)||
			($i==1)||
			($i==2)||
			($i==4&&$row[$itemid[$i]]=='Full Frame')||
			($i==5&&$row[$itemid[$i]]>24)||
			($i==6&&$row[$itemid[$i]]>85)||
			($i==7&&$row[$itemid[$i]]>6400)||
			($i==8&&$row[$itemid[$i]]>1600)||
			($i==9&&$row[$itemid[$i]]>14)||
			($i==10&&$row[$itemid[$i]]>5)||
			($i==12&&$row[$itemid[$i]]==1)||
			($i==13&&$row[$itemid[$i]]==1)||
			($i==14&&$row[$itemid[$i]]==1)||
			($i==15&&$row[$itemid[$i]]==1)
			)
			echo '<div class="col-xs-8 gold">'.$row[$itemid[$i]].'</div>';
		else
			echo '<div class="col-xs-8 silver">'.$row[$itemid[$i]].'</div>';
	}
	echo '</div>';
	echo '<div class="col-xs-8"><br></div>';
	echo '<div class="col-xs-8" style="background:#DDD;">';
	echo '<table style="width:100%;">';
	$sql="SELECT * FROM message WHERE label='".$label."' && model='".$model."'";
	$rs = $db->query($sql);
	while($row = $rs->fetch()){
		echo '<tr>';
		echo '<td style="text-align: left;">';
		echo $row[content];
		echo '</td></tr><tr><td style="text-align: right;">';
		echo $row[user].'______';
		echo $row[time];
		echo '</td></tr>';
		if($row[user]==$_SESSION[nick]){
			echo '<tr><td>';
			echo '<a class="btn btn-danger" href="control/deletmessage.php?id='.$row[id].'">刪除</a>';
			echo '</td></tr>';
		}
	}
	echo '</table>';
	echo '</div>';
	echo '<div class="col-xs-8"><br></div>';
	echo '<div class="col-xs-8" style="background:#DDD;">';
	if(isset($_SESSION[nick])){
		echo '<form action="control/message.php?label='.$label.'&model='.$model.'" method="POST">';
		echo '<label >留言版</label>';
		echo '<textarea class="form-control ckeditor" name="content" required cols="100" rows="20"> 
		<?php echo $row[content]; ?>
	</textarea>';	
	echo '<input type="submit" value="留言" class="btn btn-primary" align="left">';
	echo '</form>';		
}
else{
	echo '登入才能使用留言功能';
}

echo '</div>';
}
echo'<div style="clear:both;"></div>';
tail();
?>