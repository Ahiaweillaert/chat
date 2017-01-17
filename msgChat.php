
<?php
$pdo = new PDO("mysql:host=localhost;dbname=message", "root", "");
$message = $pdo->query("SELECT * from messagerie")->fetchAll();
?>

<html>
    <head>
        <title>msgChat</title>
        <meta charset="utf-8">
        <script src="JS/jquery.js" type="text/javascript"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>

        <div class="container">
            <h2>Tchater en direct</h2><br>
            <textarea rows="30" cols="100">
                
                <?php
                echo "\r\n";
                foreach ($message as $messagerie) {
                    echo $messagerie["date"] . " ";
                    echo $messagerie["pseudo"] . ":";
                    echo $messagerie["message"] . "\r\n";
                }
                ?> 
            </textarea><br><br>
            <form action="msgChatPOST.php" method="post"> 
                <input type="text" name="message" size="85" id="mymsg">
                <button type="button" value="envoyer" id="rechercher">Envoyer</button>
            </form>

        </div>
    </body>
</html>
<script>
    
    function clicBouton(){
        var params=$('form').serialize();
        $.post('msgChatPOST.php',params);
        $("#mymsg").val("");
    }
   $('#rechercher').click(clicBouton);
      
    </script>