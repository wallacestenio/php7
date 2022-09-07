<?php
    $jsonStr = '{
    
    "title": "Os Vingadores",
    "sinopse" : "Os heróis mais poderosos da Terra se unem para defender o planeta da ira de Loki o Deus da mentira",
    "ano" : 2010,
    "horarios" : ["16:00","18:00","20:00","23:00"]}';

    $arrFilms = json_decode($jsonStr);

    //var_dump($arrFilms);

    echo "<p><strong>Título:</strong>".$arrFilms->title."</p>";
    echo "<p><strong>Sinópse:</strong>".$arrFilms->sinopse."</p>";
    echo "<p><strong>Ano:</strong>".$arrFilms->ano."</p>";
    echo "<p><strong>Horarios:</strong></p>";
    
    
    for ($i = 0; $i < count($arrFilms->horarios); $i++){
        echo "<p>-------------------". $arrFilms->horarios[$i] . "</p>";
    }
    
    ?>