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

        $users = [
            ["nom" => "Mathilde", "mail" => "mathilde@gmail.com"],
            ["nom" => "Paul", "mail" => "paul@gmail.com"],
            ["nom" => "Jeanne", "mail" => "jeanne@gmail.com"],
            ["nom" => "Jean", "mail" => "jean@gmail.com"]
        ] ; 

        foreach ($users as $cle => $valeur) { ?>
        <h1>Utilisateur <?php $cle ?> </h1>
            <?php
            foreach($valeur as $c =>$v){
                echo "<p> ".$c." : ".$v."</p>";
            }

        } ?>








    ?>
</body>
</html>