<?php
session_start();
?>

<html>
    <head>
        <title>chatAcceuilPOST</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <h2>Identification</h2>
            <form action="msgChat.php" method="POST">
                <h7>Connexion réussie</h7><br><br>
                <button type="submit" name="chater">Tchater</button>
        </div>
        <?php
$pseudo = $_POST["pseudo"];
$_SESSION["pseudo"]= $pseudo;
?>


    </form>
</div>
</body>
</html>
