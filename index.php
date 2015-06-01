<?php
require_once('control/html.php');
head();
?>
<div class="container coverflow" style="height:460px;">
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		<!-- 若要取消標籤式按鈕，只需將mwt-title-btn拿掉即可 -->
		<ol class="carousel-indicators"></ol>
		<div class="carousel-inner">
			<!-- 廣告輪播的圖片與連結位置 -->
			<div class="item active"><a href=""><img src="img/1.jpg" alt="1"></a></div>
			<div class="item"><a href=""><img src="img/2.jpg" alt="2"></a></div>
			<div class="item"><a href=""><img src="img/3.jpg" alt="3"></a></div>
			<div class="item"><a href=""><img src="img/4.jpg" alt="3"></a></div>
			<div class="item"><a href=""><img src="img/5.jpg" alt="3"></a></div>
			<div class="item"><a href=""><img src="img/6.jpg" alt="3"></a></div>
			<div class="item"><a href=""><img src="img/7.jpg" alt="3"></a></div>
			<div class="item"><a href=""><img src="img/8.jpg" alt="3"></a></div>
			<div class="item"><a href=""><img src="img/9.jpg" alt="3"></a></div>
		</div>
		<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
		<a class="right carousel-control" href="#carousel-example-generic" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
	</div>
	<div class="col-xs-4 block" style="background: #E8D7FF; width:31%;">
		<img src="img/a1.jpg" style="width:100%;">
	</div>
	<div class="col-xs-4 block" style="background: #FFD3E8; width:31%;">
		<img src="img/a2.jpg" style="width:100%;">
	</div>
	<div class="col-xs-4 block" style="background: #FFD7D5; width:31%;">
		<img src="img/a3.jpg" style="width:100%;">
	</div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<script src="js/carousel.js"></script>
<?php
tail();
?>