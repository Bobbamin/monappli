<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <?php //fonctions

    function compteur(){
        static $x = 0 ;
        echo "x=".$x. "<br>";
        $x++;
    }

    compteur();
    compteur();
    compteur();
    compteur();

   
    

    ?> -->

<?php //fonctions

define("CONSTANTE",56);

    function compteur() {
        static $x = 0 ;
        echo "x=".$x. "<br>";
        $x++;
    }
    compteur();
    compteur();
    compteur();
    compteur();

    echo"la constante est ".CONSTANTE;


    // //CONSTANTES MAGIQUES
    // echo __FILE__."<br>" ; // fichier courant
    // echo __DIR__."<br>" ; // repertoire courant
    // echo __LINE__."<br>" ; // ligne courant


?>
    
</body>
</html>