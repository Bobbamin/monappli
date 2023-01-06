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
    $matrice = [
        [1, 2, 3],
        [4, 5, 6],
        [7, 8, 9]
    ];
    ?>
        <table>
            <?php
                foreach ( $matrice as $line ) {
            ?> 
                <tr>
                    <?php
                        foreach($line as $cell) {
                    ?>
                        <td style="border: 1px solid black"><?php echo $cell ?></td>

                        <?php
                }

                        ?>



                </tr>
                    <?php 
                        }
                ?>








        </table>
  

   
    
</body>
</html>