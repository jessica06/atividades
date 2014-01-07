<?php
    require_once("menu.php");

    session_start();

    if(!isset($_SESSION["cadastros"])){
      echo "Não existe pessoas para Remover";
    }
    else{
        $id = $_REQUEST ["id"];
        
        $cadastros =& $_SESSION["cadastros"];
        $cadastros[$id] = null;

    echo "Remoção efetuada com sucesso!";
    
    }

?>
