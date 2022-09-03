<?php
    function OpenConnection(){
        $conn = new PDO("mysql:host=localhost;dbname=blovue;charset=utf8;", 'root','');
        return $conn;
    }
    ?>