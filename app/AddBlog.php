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
      <div class="card-header">Publie un blog</div>
      <div class="card-body">
       <form method="POST" action="saveBlog.php" >
          <div class="form-group">
            <label class="control-label">Publication:</label>
            <input type="text" name="content" class="form-control">
          </div>
        
<br>
 
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