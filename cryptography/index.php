<?php
//chave de 40 caracteres sem volta
$sha1 = sha1("Hello Cryptography sha1 in php");
echo "Essa é uma chave sha1, ela tem 40 caracteres: ".$sha1."</br></br>";

//chave de 32 caracteres sem volta
$md5 = md5("Hello Cryptography md5 in php");
echo "Essa é uma chave md5, ela tem 32 carateres e é a mais usada para senhas, dados de cartão, etc: ".$md5."</br></br>";

//Base64_encode criptografa uma string, porém, permite retornar o valor
$base64 = base64_encode("O texto está criptografado em base64_encode e pode ser discritografado para ser lido novamente através do base64_decode");
echo $base64."</br></br>";
echo base64_decode($base64);




