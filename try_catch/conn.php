<?php
    function OpenConnection(){
        $conn = new PDO("mysql:host=sql305.epizy.com;dbname=piz_32524041_curriculo;charset=utf8;", 'epiz_32524041','tiOzipQzSo5');
        return $conn;
    }
    ?>