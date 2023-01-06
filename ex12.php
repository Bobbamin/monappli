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

    <?php 
    
    require_once "require.php";

        $produits = [
            "livres" => [ "quantite" => 10 , "valeur" => 15.50 ],
            "CDs" => [ "quantite" => 32 , "valeur" => 22.00 ]
        ];

        foreach ($produits as $cle => $produit){
            echo "<h1>".$cle."</h1>";
            foreach($produit as $attribut => $valeur ) { ?>
                <p><?php echo $attribut ?> = <?php echo $valeur ?></p> 
                
            <?php
                } ?>
            <?php } ?>
</body>
</html>