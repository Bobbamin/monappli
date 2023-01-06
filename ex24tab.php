<?php

    $tab =  [2,3,4,5,6];
    $tab2 = [12,13,14];

    array_push($tab,7); // add un element a la liste
    array_pop($tab); // supprime le dernier element
    array_unshift($tab,0); // add un element au debut
    array_shift($tab); //supprime un element au debu
    unset($tab[2]); // supprime une variable a une pos donnée
    $liste = array_merge($tab,$tab2); // fusionne un ou plusieurs tableau

    $annuaire = [
        "John" => "14546656465",
        "Pal" => "222226465",
        "Jack" => "3323323"
    ];

    // echo $annuaire["Paul"]  // tableau associatif (on accede apr les clés)

  //  print_r(array_keys($annuaire));  //renvoi les cles de $annuaire
  

  print_r(array_values($annuaire));

  if (array_key_exists("Paul",$annuaire)){
    echo "Paul existe et so no est:".$annuaire["Paul"];
  } else {
    echo "Paul n'existe pas";
  } 






?>