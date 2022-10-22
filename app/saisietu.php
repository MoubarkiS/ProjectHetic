<!DOCTYPE html>
<html>
    <head>
      <meta charset="utf-8">
      <link rel="stylesheet" type="text/css" href="css/style.css">
<!-- Bootstrap CSS -->
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" type="text/css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    </head>
    <body>
    <?php require_once("entete.php")?>
    <div class=" container spacer col-md-6 col-xs-12 col-md-offset-3">
      <div class="card">
      <div class="card-header">Saisie des utilisateurs</div>
      <div class="card-body">
       <form method="POST" action="saveuser.php" >
          <div class="form-group">
            <label class="control-label">Nom:</label>
            <input type="text" name="nom" class="form-control">
          </div>
        <div class="form-group">
            <label class="control-label">Email : </label>
            <input type="text" name="email" class="form-control">
          </div> 
<br>
<div class="form-group">
            <label class="control-label">Type :</label>
           
          </div>
           <div class="form-check">
          <input class="form-check-input" type="radio" value="admin" name="type" id="flexRadioDefault1">
              <label class="form-check-label" for="flexRadioDefault1"> Admin </label>
           </div>
          <div class="form-check">
          <input class="form-check-input" type="radio" value="user" name="type" id="flexRadioDefault2" checked>
           <label class="form-check-label" for="flexRadioDefault2"> Simple User </label>
         </div>
         <br>
       
          <div>
            <button type="submit" class="btn btn-dark">Save</button>
          </div>
       </form>
       </div>
      </div>
      </div>
    </body>
</html>