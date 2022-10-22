<?php
require_once("conn.php");
$req="SELECT * FROM post";
$ps=$pdo->prepare($req);
$ps->execute();
?>
   
    <html>
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<!-- Bootstrap CSS -->
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" type="text/css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>
<body>
<?php require_once("entete.php")?>

 <div class="col-md-11 col-xs-12 spacer">
  <div class=" card spacer"   >
  <?php while ($et=$ps->fetch()) { ?>
   <div class="card-header" > Yassine</div>
    <div>
    <?php echo ($et['content']) ?>
    </div>
   <?php } ?>
 </div>
</div>

</body>
</html>