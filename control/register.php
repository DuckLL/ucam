<?php
require_once('database.php');
if(!isset($_POST['account'])||!isset($_POST['password'])||!isset($_POST['password2'])||!isset($_POST['nick'])){
	header("Location: ../register.php");
	exit;
}
if(!preg_match("/^[a-zA-Z]\w*$/",$_POST['account'])){
	echo "<script type=\"text/javascript\">";
	echo 'alert("帳號只能使用英文或數字");';
	echo "history.go(-1);";
	echo "</script>";
	exit;
}
if(strlen($_POST['account'])>30){
	echo "<script type=\"text/javascript\">";
	echo 'alert("您的ID長度超出合法範圍");';
	echo "history.go(-1);";
	echo "</script>";
	exit;
}
$name=strip_tags(mysql_escape_string($_POST['nick']));
$sql = "SELECT count(*) FROM member WHERE account = '{$_POST['account']}'";
$rs = $db->query($sql);
$row = $rs->fetch();
if($row[0]==1){
	echo "<script type=\"text/javascript\">";
	echo 'alert("這個帳號有人用過囉");';
	echo "history.go(-1);";
	echo "</script>";
	exit;
}
else{
	$hashpassword=md5(sha1(md5($_POST['password'])));
	$sql = "INSERT INTO member (account, password, nick) VALUES ('{$_POST['account']}', '{$hashpassword}', '{$name}')";
	$rs = $db->prepare($sql);
	$rs->execute();
	echo "<script type=\"text/javascript\">";
	echo 'alert("註冊成功!");';
	echo "history.go(-2);";
	echo "</script>";
	exit;
}
?>