<?php
header("Content-type: text/html; charset=utf-8");
session_start();
$dsn='mysql:dbname=ucam;host=localhost';
$user='ucam';
$password='ucam';
try{
	$db=new PDO($dsn,$user,$password);
	$db->exec("set names utf8");
}
catch(PDOException $e){
	die($e->getMessage());
}
?>
