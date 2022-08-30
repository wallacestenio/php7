<?php
    $arrFrutas = [
        1 => "Abacaxi",
        2 => "Banana",
        3 => "Goiaba",
        4 => "Maça",
        5 => "Uva",
        6 => "Manga"

    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foreach</title>
</head>
<body>
    <ul>
        <?php
            foreach ($arrFrutas as $value) {
        ?>
         <li><?= $value ?></li> 
            <?php 
            }
        ?>
    </ul>
</body>
</html>
    