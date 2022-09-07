<?php
    $cep =  filter_input(INPUT_GET,"cep");
    $cep = str_replace("-","",$cep);
    $str = file_get_contents('https://viacep.com.br/ws/'.$cep.'/json/');

    $arrAddress = json_decode($str);

    echo "<p>CEP: <strong>".$arrAddress->cep."</strong></p>";
    echo "<p>Logradouro: <strong>".$arrAddress->logradouro."</strong></p>";
    echo "<p>Complemento: <strong>".$arrAddress->complemento."</strong></p>";
    echo "<p>Bairro: <strong>".$arrAddress->bairro."</strong></p>";
    echo "<p>Localidade: <strong>".$arrAddress->localidade."</strong></p>";
      