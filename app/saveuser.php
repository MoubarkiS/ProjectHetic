<?php
  $nom=$_POST['nom'];
  $email=$_POST['email'];
  $type=$_POST['type'];


  require_once("conn.php");
  $ps=$pdo->prepare("INSERT INTO utilisateur(nom,email,type) VALUES(?,?,?)");
  $params=array($nom,$email,$type);
  $ps->execute($params);
     header("location:user.php");
  ?>