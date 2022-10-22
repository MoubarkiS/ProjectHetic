<?php
$id=$_GET['id'];
require_once("conn.php");
$ps=$pdo->prepare("DELETE FROM utilisateur WHERE id=?");
$params=array($id);
$ps->execute($params);
header("location:user.php");
?>