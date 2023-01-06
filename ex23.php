<?php

    $n = $_POST["nom"];
    $p = $_POST["prenom"];
    $a = $_POST["age"];

    

    if (file_exists('text.txt')) {
        $fh = fopen("text.txt", "r");
        while (!feof($fh)) {
            
            $ligne = fgets($fh, 1024); 
            $t = explode(";",$ligne) ;
            echo $t[0].":". $t[1]."<br>" ;
        }
      
    }
    
    
    

    
    file_put_contents('text.txt',$n.$p.$a);
   
    







?>