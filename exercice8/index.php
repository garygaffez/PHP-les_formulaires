<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // var_dump($_FILES);
        $lastname = htmlspecialchars($_POST['lastname']);
        $firstname = htmlspecialchars($_POST['firstname']);
        $civilGender = htmlspecialchars($_POST['civilGender']);
        $files = htmlspecialchars($_FILES['files']['name']);
    }

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>partie 7 exercice 8</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body class="bg-secondary">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="text-warning text-center fs-3 p-5">

            <?php
            // var_dump($_SERVER["REQUEST_METHOD"]);
                if ($_SERVER["REQUEST_METHOD"] == "POST") { ?>
                    <?='Je suis '.$civilGender.' '.$firstname.' '.$lastname;?>
                
                
                <?php
                } if (isset($_FILES['files']) && $_FILES['files']['error'] == 0) {
                
                       // Testons si le fichier n'est pas trop gros                
                    if ($_FILES['files']['size'] <= 1000000) {
                
                    // Testons si l'extension est autorisée                
                        $fileInfo = pathinfo($files);
                        var_dump($fileInfo);
                        $fileName = $fileInfo['filename'];
                        $extension = $fileInfo['extension'];
                        // var_dump($fileInfo);
                        $allowedExtensions = array('jpg', 'jpeg', 'gif', 'png', 'docx');
                
                        if (in_array($extension, $allowedExtensions)) { ?>
                
                            <!-- On peut valider le fichier et le stocker définitivement                 -->
                            <!-- move_uploaded_file($_FILES['files']['tmp_name'], 'uploads/' . basename($_FILES['files']['name'])); -->
                            <p>
                                <?=$fileName.".".$extension;?>
                            </p>
                <?php
                        }                
                }          
                } else { ?>

                    <form action="index.php" method="POST" enctype="multipart/form-data">
                    <label for="firstname" class="form-label">Civilité</label>                 
                    <select class="form-select form-select-mb mb-3" name="civilGender" aria-label=".form-select-mb example">
                        <option value=Mr>Mr</option>
                        <option value=Mme>Mme</option>                    
                    </select>
                    <div class="mb-3">
                        <label for="firstname" class="form-label">Prénom</label>
                        <input type="text" class="form-control" name="firstname">                          
                    </div>
                    <div class="mb-3">
                        <label for="lastname" class="form-label">Nom</label>
                        <input type="text" class="form-control" name="lastname">
                    </div>

                        <div>
                            <label class="form-label" for="customFile" >Choisissez un fichier</label>
                            <input type="file" class="form-control" id="customFile" name="files"/>
                        </div>
            
                        <button type="submit" class="btn btn-warning mt-5">Envoyer</button> 
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
