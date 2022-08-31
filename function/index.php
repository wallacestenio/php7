<?php
function showName(){
    return "Rosana Cassiano dos Santos </br></br>";
}
$v = showName();



function setName($name, $email){
    echo "Meu nome é {$name} e meu e-mail é {$email} </br></br>";
}

echo setName("Wallace Stenio da Silva","wallacestenio@gmail.com");

echo $v;