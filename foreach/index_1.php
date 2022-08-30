<?php
    $arrNotes = [
        "Student1" => [
            "name" => "Wallace",
            "age" => 41,
            "note" =>7
        ],
        "Student2" => [
            "name"  => "Rosana",
            "age"   => 58,
            "note"  => 8
        ],
        "Student3" => [
            "name"  => "Pedro",
            "age"   => 8,
            "note"  => 9
        ],
        "Student4" => [
            "name"  => "Ryan",
            "age"   => 18, 
            "note"  => 10
        ]
    ];

    foreach ($arrNotes as $student){
        foreach ($student as $key => $value){
            echo "{$key} = {$value} </br>";
        }
        echo "</br>";
    }