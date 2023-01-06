<?php

$n = htmlspecialchars($_GET['nom']);
$a = htmlspecialchars($_GET['age']);
$p = htmlspecialchars($_GET['prenom']);

//print_r ($_POST);
    
?>
    <h1>Bonjour,  <?=$n ?>  <?=$p ?></h1>
    <h2>Vous avez <?=$a ?> ans</h2>
       

   