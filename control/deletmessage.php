<?php
session_start();
require_once('database.php');
$id=htmlspecialchars($_GET['id']);
$sql="SELECT * FROM message WHERE id='{$id}'";
$rs = $db->query($sql);
$row = $rs->fetch();
if($row['user']==$_SESSION['nick']){
	$sql = "DELETE FROM message WHERE id='{$id}'";
	$rs = $db->exec($sql);
	header("Location: ../info.php?label=".$row['label']."&model=".$row['model']);
}
else{
	echo 'fuck you';
}
?>