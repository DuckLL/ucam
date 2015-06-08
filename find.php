<?php
require_once('control/html.php');
require_once('control/database.php');
head();
?>
<link href="css/sidebar.css" rel="stylesheet" type="text/css">
<script src="js/gotitem.js"></script>
<div class="col-xs-3">
	<nav class="navbar navbar-default sidebar" role="navigation" style="margin-left: 0px;">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
					<span class="sr-only">
						Toggle navigation
					</span>
					<span class="icon-bar">
					</span>
					<span class="icon-bar">
					</span>
					<span class="icon-bar">
					</span>
				</button>

			</div>
			<div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							預算優先
							<span class="caret">
							</span>
							<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-usd">
							</span>
						</a>
						<ul class="dropdown-menu forAnimate" role="menu">
							<li>
								<a href="find.php?id=a1">
									25000ↆ
								</a>
							</li>
							<li class="divider">
							</li>
							<li>
								<a href="find.php?id=a2">
									25000~50000
								</a>
							</li>
							<li class="divider">
							</li>
							<li>
								<a href="find.php?id=a3">
									50000𐌣
								</a>
							</li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							品牌優先
							<span class="caret">
							</span>
							<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-camera">
							</span>
						</a>
						<ul class="dropdown-menu forAnimate" role="menu">
							<li>
								<a href="find.php?id=b1">
									Canon
								</a>
							</li>
							<li class="divider">
							</li>
							<li>
								<a href="find.php?id=b2">
									Nikon
								</a>
							</li>
							<li class="divider">
							</li>
							<li>
								<a href="find.php?id=b3">
									Sony
								</a>
							</li>
							<li class="divider">
							</li>
							<li>
								<a href="find.php?id=b4">
									Pentax
								</a>
							</li>
							<li class="divider">
							</li>
							<li>
								<a href="find.php?id=b5">
									Fujifilm
								</a>
							</li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							功能優先
							<span class="caret">
							</span>
							<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-heart-empty">
							</span>
						</a>
						<ul class="dropdown-menu forAnimate" role="menu">
							<li>
								<a href="find.php?id=c1">
									夜拍
								</a>
							</li>
							<li class="divider">
							</li>
							<li>
								<a href="find.php?id=c2">
									畫質
								</a>
							</li>
							<li class="divider">
							</li>
							<li>
								<a href="find.php?id=c3">
									運動
								</a>
							</li>
							<li class="divider">
							</li>
							<li>
								<a href="find.php?id=c4">
									輕巧
								</a>
							</li>
							<li class="divider">
							</li>
							<li>
								<a href="find.php?id=c5">
									分享
								</a>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</nav>
</div>
<div class="col-xs-9">
	<?php
	if(isset($_GET['id'])){
		$id=$_GET['id'];
		switch ($id){
			case 'a1':
			$sql="SELECT * FROM camera WHERE price<25000";
			break;
			case 'a2':
			$sql="SELECT * FROM camera WHERE price<50000 && price>=25000";
			break;
			case 'a3':
			$sql="SELECT * FROM camera WHERE price>=50000";
			break;
			case 'b1':
			$sql="SELECT * FROM camera WHERE label='Canon'";
			break;
			case 'b2':
			$sql="SELECT * FROM camera WHERE label='Nikon'";
			break;
			case 'b3':
			$sql="SELECT * FROM camera WHERE label='Sony'";
			break;
			case 'b4':
			$sql="SELECT * FROM camera WHERE label='Pentax'";
			break;
			case 'b5':
			$sql="SELECT * FROM camera WHERE label='Fujifilm'";
			break;
			case 'c1':
			$sql="SELECT * FROM camera WHERE isonoise>1600";
			break;
			case 'c2':
			$sql="SELECT * FROM camera WHERE quality>85";
			break;
			case 'c3':
			$sql="SELECT * FROM camera WHERE fps>5";
			break;
			case 'c4':
			$sql="SELECT * FROM camera WHERE weight<500";
			break;
			case 'c5':
			$sql="SELECT * FROM camera WHERE wifi=1";
			break;
			default:
			$sql="SELECT * FROM camera";
		}
	}
	else{
		$sql="SELECT * FROM camera";
	}
	$rs = $db->query($sql);
	while($row = $rs->fetch()){
		echo '<div class="block">';
		echo '<div class="col-xs-2">';
		echo '<img src="img/'.$row['label'].'/'.$row['model'].'/main.jpg" style="width:100%;">';
		echo '<a class="btn btn-success" onclick="item(1,\''.$row['label'].'\',\''.$row['model'].'\')">比較一</a>';
		echo '<a class="btn btn-info" onclick="item(2,\''.$row['label'].'\',\''.$row['model'].'\')">比較二</a>';
		echo '</div>';
		echo '<div class="col-xs-2">';
		echo $row['label'].'<br>';
		echo $row['model'].'<br>';
		echo $row['feature'].'<br>';
		echo '$'.$row['price'].'<br>';
		echo '<a class="btn btn-warning" href="info.php?label='.$row['label'].'&model='.$row['model'].'">詳細資料</a>';
		echo '</div>';
		echo '<div class="col-xs-8">';
		echo '<img src="img/'.$row['label'].'/'.$row['model'].'/Animal.jpg" style="width:30%;">';
		echo '<img src="img/'.$row['label'].'/'.$row['model'].'/Flower.jpg" style="width:30%;">';
		echo '<img src="img/'.$row['label'].'/'.$row['model'].'/Night.jpg" style="width:30%;">';
		echo '<img src="img/'.$row['label'].'/'.$row['model'].'/People.jpg" style="width:30%;">';
		echo '<img src="img/'.$row['label'].'/'.$row['model'].'/Scene.jpg" style="width:30%;">';
		echo '</div>';
		echo '<div style="clear:both;">';
		echo '</div>';
		echo '</div>';
	}
	?>
</div>
<div style="clear:both;">
</div>
<?php
tail();
?>