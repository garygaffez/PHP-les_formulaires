<?php
    if (isset($_POST['lastname']) && isset($_POST['firstname']) && isset($_POST['civilGender'])) {
        $lastname = htmlspecialchars($_POST['lastname']);
        $firstname = htmlspecialchars($_POST['firstname']);
        $civilGender = htmlspecialchars($_POST['civilGender']);
    }

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>partie 7 exercice 6</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body class="bg-secondary">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="text-warning text-center fs-3 p-5">

            <?php
                if ((isset($civilGender)) || (isset($firstname)) || (isset($lastname))) { ?>
                    <?='Je suis '.$civilGender.' '.$firstname.' '.$lastname;?>
                <?php
                
                } else { ?>
                    <form action="index.php" method="POST">                    
                        <select class="form-select form-select-mb mb-3" name="civilGender" aria-label=".form-select-mb example">
                            <option value=Mr>Mr</option>
                            <option value=Mme>Mme</option>                    
                        </select>
                        <div class="mb-3">
                            <label for="firstname" class="form-label">firstname</label>
                            <input type="text" class="form-control" name="firstname">                          
                        </div>
                        <div class="mb-3">
                            <label for="lastname" class="form-label">lastname</label>
                            <input type="text" class="form-control" name="lastname">
                        </div>
                        
                        <button type="submit" class="btn btn-warning">Envoyer</button> 
                    </form>
                <?php
                }
            ?>

            </div>
        </div>
    </div>
</div>


</body>
</html>
