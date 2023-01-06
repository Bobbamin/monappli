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
    <?php //fonctions

    function addition(int $a , int $b) { // ici le type renvoyé doit etre int(entier)
        return $a + $b ;
    }

    $res = addition(3,5);
    echo $res ;

    echo addition(66,44);

    

    ?>
    
</body>
</html>