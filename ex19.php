<?php

$url = "http://www.afpa.fr";






    if ( ppreg_match('#(https?|ftp|ssh|mailto):\/\/[a-z0-9\/:%_+.,\#?!@&=-]+#i', $url,)) {
    echo "ok<br>";
} else {
    echo "ko<br>";
}


?>









