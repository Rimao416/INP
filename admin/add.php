<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.1/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h3>Page d'Ajout Opérateurs</h3>
        <div class="card">
            <div class="card-body">
            <form method="post" action="ajout.php">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputNom4">Nom</label>
      <input type="text" class="form-control" id="inputNom" name="nom" placeholder="Nom" required>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputPreNom4">PreNom</label>
      <input type="text" class="form-control" id="inputPreNom" name="prenom" placeholder="PreNom" required>
    </div>
  </div> 
  <br>
  <button type="submit" class="btn btn-primary">Ajouter</button>
</form>
            </div>

        </div>
 

    </div>

</body>
</html>