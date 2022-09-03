<?php
   /* include("record.php");
    Record("Include", "file.txt"); 

    include("read.php");
    $txt = Read("file.txt");
    echo $txt;
*/

    require("record.php");
    Record("Require","file.txt");

    require("read.php");
    $txt = Read("file.txt");
    echo $txt;

    