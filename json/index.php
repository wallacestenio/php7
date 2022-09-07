<?php
    //array to json
    //convertendo um array para json
/*
    "title": "Os Vingadores",
    "sinopse" : "Os heróis mais poderosos da Terra se unem para defender o planeta da ira de Loki o Deus da mentira",
    "ano" : 2010,
    "horarios" : ["16:00","18:00","20:00","22:00"]
*/
    $arrayFilmes = array(
        "title" => "Os vingadores", 
        "sinopse" => "Os heróis mais poderosos da Terra se unem para defender o planeta da ira de Loki o Deus da mentira", 
        "ano" => 2010, 
        "horarios" => array(
            "14:00",
            "17:00",
            "20:00",
            "23:00"
        ) 
    );

    //var_dump($arrayFilmes);

    $jsonStr = json_encode($arrayFilmes);
   
    echo $jsonStr;
    