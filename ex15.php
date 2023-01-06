<?php
require_once "require.php";

    $prenom = "polo";
    $nom = "call";
    $age = 23;

    //les variables globales sont toutes dans un tableau specifique a PHP => GLOBALS

    function presente(){
        // pour utilise les varibles globales dans ma fonction declaree av l'operateur global
        global $nom, $prenom, $age ;
        echo "je suis ".$prenom." ".$nom." et j'ai ".$age." ans " ;
    }

    function presente2(){
        echo "je suis ".$GLOBALS["prenom"];
    }

    // presente();
    // presente2();
//debug($GLOBALS);
debug($_SERVER);    // la superglobale $_SERVER DONNE DES RENSEIGNEMENTS SUR LE SERV










?>
