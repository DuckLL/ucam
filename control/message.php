<?php
require_once('database.php');

$label=htmlspecialchars($_GET[label]);
$model=htmlspecialchars($_GET[model]);
$nick=$_SESSION[nick];
$content=strip_tags(mysql_escape_string($_POST['content']),'<br><p><a><ul><li><span><strong><div><h1><h2><h3><sup><sub><u><blockquote><ol><img>');
$sql = "INSERT INTO message (label, model, user, content) VALUES ('{$label}', '{$model}', '{$nick}','{$content}')";
$rs = $db->prepare($sql);
$rs->execute();
header("Location: ../info.php?label=".$label."&model=".$model);
exit;
?>