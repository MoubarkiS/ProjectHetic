<?php
  $content=$_POST['content'];

  

  require_once("conn.php");
  $ps=$pdo->prepare("INSERT INTO post (content,date_post,user_id) VALUES(?,?,?)");
  $params=array($content,null,11);
  $ps->execute($params);
     header("location:Blogs.php");
  ?>