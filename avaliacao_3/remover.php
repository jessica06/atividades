<?php
    require_once("menu.php");

    session_start();

    if(!isset($_SESSION["cadastros"])){
      echo "Não encontrado Produtos para fazer a remoção!";
    }
    else{
        $id = $_REQUEST ["id"];
        
        $cadastros =& $_SESSION["cadastros"];
        $cadastros[$id] = null;
        
        
        
        echo "Produto removido com sucesso.";
    }

?>
