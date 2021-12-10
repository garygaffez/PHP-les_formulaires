<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>partie 1 exercice 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body class="bg-dark">

<div class="text-warning text-center fs-3 p-5">

<!-- <form action="index.php" method="GET">
    <div class="mb-3">
        <label for="lastname" class="form-label">lastname</label>
        <input type="text" class="form-control" name="lastname">
    </div>
    <div class="mb-3">
        <label for="firstname" class="form-label">firstname</label>
        <input type="text" class="form-control" name="firstname">
    </div>
    <button type="submit" class="btn btn-warning">Envoyer</button> 
</form> -->



<?php

    if (!isset($_GET['lastname']) || !isset($_GET['firstname'])) { ?>
        <p>Il faut un lastname et un firstname pour soumettre le formulaire.</p>
<?php
    } else {
        foreach ($_GET as $value) { ?>
            <p>
                <?=$value;?>
            </p>
<?php
        }
    }

?>




<?php
    if (!isset($_GET['lastname']) || !isset($_GET['firstname'])) {
        echo '<p>Il faut un lastname et un firstname pour soumettre le formulaire.</p>';
    } else { 
        $firstname = $_GET["firstname"];
        $lastname = $_GET["lastname"];
                // méthode 1 pour afficher dans le html
        echo "Votre prénom est $firstname "; ?>
                <!-- méthode 2 pour afficher dans le html-->
        <p>
            <?="Votre nom est $lastname"?>
        </p>
    <?php
    }

?>





</div>

</body>
</html>