<?php
    include __DIR__ . '/partials/function.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>PHP Strong Password Generator</title>
</head>
<body>

    <header class="container">
        <h1>
            PHP Strong Password Generator
        </h1>
    </header>

    <main class="container mt-3">
        <form action="" method="GET" class="row g-3 align-items-center">
            <div class="col-auto">
                <label for="passwordLength" class="col-form-label">
                    Quanto vuoi che sia lunga la tua password?
                </label>
            </div>
            <div class="col-auto">
                <input type="number" name="passwordLength" value="" class="form-control">
            </div>
            <div class="d-grid gap-2 d-md-block">
                <button class="btn btn-primary" type="submit">Invia</button>
            </div>
        </form>

        <?php

            #Applico un controllo per cui se è stato riempito l'input
            if(isset($_GET['passwordLength']) && !isset($password)) {

                #Racchiudo in una variabile il valore inserito in input convertito in number
                $passwordLength = $_GET['passwordLength'];

                #Dichiaro una variabile contenente i caratteri speciali
                $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!@#$%^&*';

                #Utilizzo della funziona
                $password = generateRandomPassword($passwordLength, $characters);

            };

        ?>

        <div>
            <h3>
                Abbiamo generato questa password per te è:  
                <?php 
                    if (isset($password)) {
                        echo $password; 
                    }
                ?>
            </h3>
        </div>


    </main>

</body>
</html>