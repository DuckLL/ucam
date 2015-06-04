<?php
require_once('database.php');
$sql = "SELECT * FROM camera WHERE label='{$_POST[label]}' && model='{$_POST[model]}'";
$rs = $db->query($sql);
$row = $rs->fetch();
$_SESSION['label'.$_POST[id]]=$row[label];
$_SESSION['model'.$_POST[id]]=$row[model];
echo '<a href="info.php?label='.$row[label].'&model='.$row[model].'">'.$row[label].' '.$row[model].'<br><img src="img/'.$row[label].'/'.$row[model].'/main.jpg" style="width:100px;"></a>';
?>