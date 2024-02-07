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

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>PHP Strong Password Generator - Generate</title>
</head>
<body>
    <div class="container my-3 text-center">
        <h3>
            Abbiamo generato questa password per te:  
            <?php 
                // print_r($_SESSION);

                echo $_SESSION['finalPassword'];

                // unset($_SESSION['finalPassword']);
            ?>
        </h3>

        <div>
            <a class="btn btn-primary text-decoration-none" href="./logout.php">
                Torna alla Pagina principale
            </a>
        </div>
    </div>
</body>
</html>