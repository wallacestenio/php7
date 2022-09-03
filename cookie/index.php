<?php

    $req = filter_input(INPUT_GET, "req", FILTER_SANITIZE_NUMBER_INT);

    switch ($req) {
        case 1:
            Create();
            break;
        case 2:
            Read();
            break;
        case 3:
            Update();
            break;
        case 4:
            Delete();
            break;
    }

    function Create() {
        echo "Create Cookie";
        setcookie("name", "Wallace Stenio", time() + 60);
    }

    function Read() {
        //echo $_COOKIE["name"];
        echo filter_input(INPUT_COOKIE, "name", FILTER_SANITIZE_STRING);
    }

    function Update(){
        echo "Update Cookie";
        setcookie("name", "Pedro Igor");
    }

    function Delete(){
        echo "Delete Cookie";
        setcookie("name", "Wallace Stenio", time() -1);
    }