<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php   // supprimer un fichier 
        if(file_exists("texte.txt")){

    
        if(unlink("texte.txt")) {
            echo "Texte.txt a ete supprimé!";
    

        }
    } else {
        echo "Le fichier n'existe pas !";
    }
   
    ?>
</body>
</html>