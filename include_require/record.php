<?php
      function Record(string $txt, string $file){
        $op = fopen($file, "a+");
        fwrite($op, "{$txt} <br>\r\n");
        fclose($op);
    }
?>  