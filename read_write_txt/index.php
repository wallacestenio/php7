<?php

    function Record(string $txt, string $file){
        $op = fopen($file, "a+");
        fwrite($op, "{$txt} <br>\r\n");
        fclose($op);
    }
    
    Record(date("d/m/y H:m:s"), "file.txt");

    function Read(string $file){

        $op = fopen($file, "r");
        $txt = fread($op, filesize($file));
        fclose($op);
        return $txt;
    }

    echo Read("file.txt");