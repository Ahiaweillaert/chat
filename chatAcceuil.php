<!DOCTYPE html>
<html>
<head>
  <title>Formulaire/Cookie</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Identification</h2>
  <form action="chatAcceuilPOST.php" method="POST">
    <div class="form-group">
      <label for="email">Identifiant:</label>
      <input type="text" class="form-control" name="pseudo" placeholder="Enter votre identifiant ">
    </div>
    <div class="checkbox">
      <label><input type="checkbox"> Se souvenir de moi</label>
    </div>
    <button type="submit" class="btn btn-default">Envoyer</button>
    
  </form>
</div>
</body>
</html>