<?php
    function Read(string $file){

        $op = fopen($file, "r");
        $txt = fread($op, filesize($file));
        fclose($op);
        return $txt;
    }
?>