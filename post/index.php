<?php
$arrNames = ["Wallace","Rosana","Pedro","Pamela","Laura","Ryan","Fabiana","Alexandre"];

$name = filter_input(INPUT_POST, "txtName", FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, "txtEmail", FILTER_SANITIZE_EMAIL);
$colabCod = filter_input(INPUT_POST,"selColab",FILTER_SANITIZE_NUMBER_INT);

$colab = "";
if ($colabCod) {
    $colab = $arrNames[$colabCod];
}

/*
if(isset($_POST["txtName"])){
    $name = $_POST["txtName"];    
}

if(isset($_POST["txtEmail"])){
    $email = $_POST["txtEmail"];
}

if(isset($_POST["selColab"])){
    $colab = $arrNames[$_POST["selColab"]];
}*/
?>
<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Post</title>
            <style>
                ul {
                    list-style: none;
                }
                input, select {
                    padding: 5px;
                    margin-top: 10px;
                }
            </style>
        </head>
    <body>
        <form action="" method="post">
            <ul>
                <li>Nome: <input type="text" name="txtName"></li>
                <li>E-mail: <input type="text" name="txtEmail"></li>
                <li>Funcionario: 
                    <select name="selColab" id="">
                        <?php
                            for($i = 0; $i < count($arrNames); $i++){
                                ?>
                                    <option value="<?= $i; ?>"><?= $arrNames[$i]; ?></option>
                                <?php
                            }
                        ?>
                    </select>
                </li>
                <li><input type="submit" name="btnSubmit" value="Cadastrar"></li>
            </ul>
        </form>    
    </body>
        </br><hr></br>

        <p>Nome: <?= $name ?></p>
        <p>E-mail: <?= $email ?></p>
        <p>Funcionario: <?= $colab ?></p>
        </html>