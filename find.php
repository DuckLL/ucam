<?php
require_once('control/html.php');
head();
?>
<link href="css/sidebar.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.6.0/bootstrap-table.min.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.6.0/bootstrap-table.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.6.0/locale/bootstrap-table-zh-CN.min.js"></script>
<nav class="navbar navbar-default sidebar" role="navigation">
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
								2萬以下
							</a>
						</li>
						<li class="divider">
						</li>
						<li>
							<a href="find.php?id=a2">
								5萬以下
							</a>
						</li>
						<li class="divider">
						</li>
						<li>
							<a href="find.php?id=a3">
								無上限
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
							<a href="#">
								Pentax
							</a>
						</li>
						<li class="divider">
						</li>
						<li>
							<a href="find.php?id=b4">
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
								不後製
							</a>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</nav>
<?php
if(isset($_GET[id])){
	$id=$_GET[id];
	switch ($id){
		case 'a1':
		echo money;
		break;
	}
}
?>
<?php
tail();
?>