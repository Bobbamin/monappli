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
    if (file_exists("text.txt")){
        if(is_file("texte.txt")) {
        $handler = fopen("texte.txt","r") ;
       // echo fread($handler, filesize ("texte.txt") );
    //    echo fgets($handler,1024) ;
    //    echo "<br>";
    //    echo fgets($handler,1024) ; fgets lit le caractere par caracterer

    while(!feof($handler)){   //TANT QUil nest pas a la fin du fichier (feof)
        echo fgets($handler,1024);
        echo "<br>";
    }

//    fwrite($handler, "un texte supplémentaire");

    fclose($handler) ;
}
}

    ?>
</body>
</html>