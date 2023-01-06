<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    echo "<p>Document</p>" ;

    ?>
    <h1>Document</h1>
    <?php
    // en php une variable est tjrs precedee d'un $
    $unechaine = "lorem ipsum ddedzdzdz" ;
    echo "<p>".$unechaine."</p>" ; // en php l'operateur de concatenation.

    $x = 1 ;
    $y = 4 ;
    $z = $x + $y ;
    echo "<p>".$x."+".$y."=".$z."</p>" ;

  //  $w = $y++ ;
   // echo "<p>".$y."</p>" ;

   if ( $y > 2) {
    echo "y est superieur a 2" ;
   } else if ($y < 2) { 
    echo "y est inferieur à 2" ;
   } else {
    echo "x egal 2";
   }


   $cvrai = true ;
   if($cvrai) {
    echo "<p>true</p>" ;
   }

   if ( ( $y > 2 ) && ( $x ==1 )) { echo "vrai";}
   // &&(and) renvoi true si toutes les comparaisons sont vrais

   if ( ( $y > 2 ) || ( $x ==1 )) { echo "vrai";}
   // ||(or) renvoi true si une des comparaison est vrai

   





    ?>
    
</body>
</html>