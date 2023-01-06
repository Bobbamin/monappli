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

    $agestudents = ["mathilde"=>27 , "pol"=>26, "amandine"=>24];
    debug($agestudents);
    $mailstudents ["mathilde"] = "mathilde@gmail.com";
    $mailstudents ["pol"] = "Pol@gmail.com";
    $mailstudents ["amandine"] = "amandine@gmail.com";
    debug($mailstudents);

    foreach($mailstudents as $cle => $valeur) { ?>
        <h1><?php echo $cle; ?></h1>
        <p><?php echo $valeur; ?></p>
        <hr>
    <?php

    }


    ?>
    
</body>
</html>