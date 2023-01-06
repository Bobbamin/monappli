<?php

$chaine = "AEEFEFEF" ;
$bonjour = "je dis bonjour" ;
$email = "jam@gmail.com";
$numero = "0633560345";

// preg_match a trouvé des caracteres A-Z majuscules dans $chaine
// avec le + ca veut dire 1 ou plusieurs foisssss

// if ( preg_match("/[a-z]+@[a-z]+\.[a-z]{2,3}$/", $email)){
    if ( preg_match('#(0|\+33)[1-9]( *[0-9]{2}){4}#', $numero)) {
    echo "ok<br>";
} else {
    echo "ko<br>";
}

$res = preg_filter("/jour/", "soir" , $bonjour );
echo $res ;


?>



