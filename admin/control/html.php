<?php
session_start();
header("Content-type: text/html; charset=utf-8");
function head(){
	echo'
	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="UTF=8">
		<meta name="viewport" content="width=device-wirdth, initial-scale=1">
		<title>Ucam</title>
		<link rel="shortcut icon" href="img/logo.png" type="image/ico">
		<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<link href="css/starter-template.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<script src="js/jquery-2.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a id="NAVbrand" class="navbar-brand" href="index.php" style="padding-top:6px;"><img style="width:40px; height:40px; " src="img/logo.png">Ucam</a>
				</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li><a href="find.php" class="glyphicon glyphicon-star"> 找相機</a></li>
						<li><a href="compare.php" class="glyphicon glyphicon-search"> 比較相機</a></li>
						<li><a href="seesee.php" class="glyphicon glyphicon-eye-open"> 隨處逛逛</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
					<li style="width:400px;">'."<script>
  (function() {
    var cx = '003364019149191935487:uylv9r0fgec';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
        '//cse.google.com/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>
<gcse:search></gcse:search>".'</li>
						<li><a href="about.php" class="glyphicon glyphicon-info-sign"> 關於我們</a></li>';
						if(isset($_SESSION['nick'])){
							echo'<li><a>'.$_SESSION['nick'].'</a></li>';
							echo'<li><a href="logout.php" class="glyphicon glyphicon-log-out"> 登出</a></li>';
						}
						else{
							echo'<li><a href="register.php" class="glyphicon glyphicon-plus"> 註冊</a></li>
							<li><a href="login.php" class="glyphicon glyphicon-log-in"> 登入</a></li>';
						}
						echo'
					</ul>
				</div><!-- /.navbar-collapse -->  
			</div>
		</nav>
		<div class="container">
			<div class="starter-template">
				';
			}
			function tail(){
				echo'
			</div>
		</div>

		<div id="item1">
			';
			if(isset($_SESSION['label1']))
				echo '<a href="info.php?label='.$_SESSION['label1'].'&model='.$_SESSION['model1'].'">
			'.$_SESSION['label1'].' '.$_SESSION['model1'].'<br><img src="img/'.$_SESSION['label1'].'/'.$_SESSION['model1'].'/main.jpg" style="width:100px;"></a>';
			echo '

		</div>
		<div id="item2">
			';
			if(isset($_SESSION['label2']))
				echo '<a href="info.php?label='.$_SESSION['label2'].'&model='.$_SESSION['model2'].'">
			'.$_SESSION['label2'].' '.$_SESSION['model2'].'<br><img src="img/'.$_SESSION['label2'].'/'.$_SESSION['model2'].'/main.jpg" style="width:100px;"></a>
			';
			echo '
		</div>';
		echo '
	</body>
	</html>
	';
}
?>