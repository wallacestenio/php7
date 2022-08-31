<?php

    $name = "Wallace";
    
    //echo substr($name, 0, 7);

    //echo strtolower($name);

    //echo strtoupper($name);

    $message = "";

    //echo $message . "</br>";

    //$message = strip_tags("<h1>Bem Vindo,</h1> acesse o <a href=''><strong>Link</strong></a>","<h1><a><strong>");

    //echo $message;

    //$eat = "Banana, Maça, Pêra, Uva"."</br>";

    //echo $eat;

    //$change = str_replace("Banana", "Goiaba", $eat);
    
    //echo $change;

    //$change2 = str_ireplace("goiaba", "Batata", $change);

    //echo $change2;

   //$ex = explode(" ", $name);

   //echo $ex[1];


   if (strlen($name) <= 10) {
    echo "Válido";
   }else {
    echo "Invalido";
   }

