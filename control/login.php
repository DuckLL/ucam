<?php
require_once('database.php');
if(!isset($_POST['account'])||!isset($_POST['password'])){
	header("Location: ../login.php");
	exit;
}
if(!preg_match("/^[a-zA-Z]\w*$/",$_POST['account'])){
	echo "<script type=\"text/javascript\">";
	echo 'alert("帳號或密碼錯誤!");';
	echo "history.go(-1);";
	echo "</script>";
	exit;
}
$sql="SELECT * FROM member WHERE account='{$_POST['account']}'";
$rs = $db->query($sql);
$row = $rs->fetch();
if(md5(sha1(md5($_POST['password'])))===$row[password]){
	$_SESSION['nick']=$row[nick];
	header("Location: ../");
	exit;
}
else{
	echo "<script type=\"text/javascript\">";
	echo 'alert("帳號或密碼錯誤!");';
	echo "history.go(-1);";
	echo "</script>";
	exit;
}
?>