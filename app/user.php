<?php
require_once("conn.php");
$req="SELECT * FROM utilisateur";
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
   <div class="card-header" >Listes des utilisateurs</div>
    <div class="card-body"> 
      <table  class="table table-striped">
       <thead>
        <tr>
            <th>id </th><th>nom</th><th>email</th><th>type </th>
        </tr>
      </thead>
    <tbody>
        <?php while ($et=$ps->fetch()) { ?>
     <tr>
        <td><?php echo ($et['id']) ?></td>
        <td><?php echo ($et['nom']) ?></td>
        <td><?php echo ($et['email']) ?></td>
        <td><?php echo ($et['type']) ?></td>
        <td><a href="edituser.php?id=<?php echo ($et['id']) ?>">Editer</a></td>
        <td><a onclicks="alert" href="deleteuser.php?id=<?php echo ($et['id']) ?>">Supprimer</a></td>

     </tr>
       <?php }  ?>
    </tbody>
   </table>
  </div>
 </div>
</div>
</body>
</html>