<?php
/*$nomes = ["Wallace","Rosana","Pedro","Pamela","Laura","Ryan","Fabiana","Alexandre"];

for ($i = 0; $i < 5; $i++){
    echo "Nome {$i} - {$nomes[$i]} </br>";
}

/* array com count() */
/*
echo "</br></br>";

for ($i = 0; $i < count($nomes); $i++){
    echo "Nome {$i} - {$nomes[$i]} </br>";
}*/
$nomes = ["Wallace","Rosana","Pedro","Pamela","Laura","Ryan","Fabiana","Alexandre"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=], initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <select name="slTeachers" id="slTeachers">
        <?php
            for ($i = 0; $i < count($nomes); $i++){
            ?>
        <option value="<?= $i; ?>"><?= $nomes[$i]; ?></option>
        <?php
            }
        ?>
    </select>
    <button onclick="alert(document.getElementById('slTeachers').value);">Select</button>
</body>
</html>