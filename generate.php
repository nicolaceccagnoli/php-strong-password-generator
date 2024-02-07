<?php

    #Faccio partire la sessione
    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Strong Password Generator - Generate</title>
</head>
<body>
    <div class="container">
        <h3>
            Abbiamo generato questa password per te:  
            <?php 
                // print_r($_SESSION);

                echo $_SESSION['finalPassword'];

                // unset($_SESSION['finalPassword']);
            ?>
        </h3>

        <div>
            <a href="./logout.php">
                Torna alla Pagina principale
            </a>
        </div>
    </div>
</body>
</html>