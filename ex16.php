<?php



$x = 0;

function ajoute3($arg1) {
    $arg1 +=3;
    return $arg1;
}


function ajoute4ref(&$arg1) {
    $arg1 += 4;
    return $arg1;
}






//ne change pas la valeur definitive de x
echo ajoute3($x)."<br>";
echo $x."<br>";
echo ajoute4ref($x)."<br>";
echo $x."<br>";











?>