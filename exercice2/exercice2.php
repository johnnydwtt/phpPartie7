<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>exercice 1 et 4 php</title>
</head>
<body>
    
<div class="text-white d-flex justify-content-center">
<form action="user.php" method="post">

  <div class="mb-3">
    <label class="form-label">Prénom</label>
    <input name="firstname" type="text" class="form-control" id="firstname">
  </div>
  <div class="mb-3">
    <label class="form-label">Nom</label>
    <input name="lastname" type="text" class="form-control" id="lastname">
  </div>
  <button type="submit" class="btn btn-primary">Envoyer</button>

</form>
</div>

</body>
</html>