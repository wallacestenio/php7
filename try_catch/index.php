<?php
    require_once("conn.php");
    
        try {
            OpenConnection();
            echo "Conexão realizada com sucesso! :)";
        }catch(Exception $e){
            echo "<strong>Mensagem</strong> " . $e->getMessage()."</br>";
            echo "<strong>Linha</strong> " . $e->getLine()."</br>";
            echo "<strong>Arquivo</strong> " . $e->getFile()."</br>";
            echo "<strong>Código</strong>" . $e->getCode();
        }