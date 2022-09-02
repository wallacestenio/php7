<?php
    $arrNames = ["Wallace","Rosana","Pedro","Pamela","Laura","Ryan","Fabiana","Alexandre"];
    /*$name = $_GET["name"];
    $email = $_GET["email"];

    echo $name;
    echo "</br>".$email;*/
    $name = filter_input(INPUT_GET, "txtName", FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_GET, "txtEmail", FILTER_SANITIZE_EMAIL);
    $colabCod = filter_input(INPUT_GET,"selColab",FILTER_SANITIZE_NUMBER_INT);

    $colab = "";
        if ($colabCod) {
            $colab = $arrNames[($colabCod - 1)];
        }
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
        <form action="" method="get">
            <ul>
                <li>Nome: <input type="text" name="txtName"></li>
                <li>E-mail: <input type="text" name="txtEmail"></li>
                <li>Funcionario: 
                    <select name="selColab" id="">
                        <?php
                            for($i = 0; $i < count($arrNames); $i++){
                                ?>
                                    <option value="<?= $i +1; ?>"><?= $arrNames[$i]; ?></option>
                                <?php
                            }
                        ?>
                    </select>
                </li>
                <li><input type="submit" name="btnSubmit" value="Cadastrar"></li>
                <li><a href="http://localhost:8000/get/">Atualizar</a></li>
            </ul>
        </form>    
    </body>
        </br><hr></br>

        <p>Nome: <?= $name ?></p>
        <p>E-mail: <?= $email ?></p>
        <p>Funcionario: <?= $colab ?></p>
        </html>