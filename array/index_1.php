<?php
    /*
    $arrayNotes = [
        "Student1" => 10,
        "Student2" => 5,
        "Student3" => 0,
        "Student4" => 2,
        "Student5" => 5,
    ];

    echo $arrayNotes["Student1"];

    */

    $arrayNotes = [
        "Student1" => array(
            "name" => "Wallace",
            "note" => 10
        )
        
    ];

    echo $arrayNotes["Student1"]["note"];