<?php
    
    require_once("menu.php");
    
 session_start();

    if(!isset($_SESSION["cadastros"])){
        $_SESSION["cadastros"] = array ();
    }
    
    $nomeproduto = $_REQUEST["nome"];
    $cor = $_REQUEST["cor"];
    $prazoentrega = $_REQUEST["prazo"];
    $detalhes = $_REQUEST["detalhes"];
    
    $aceito = false;
    if(isset($_REQUEST["aceito"])){
        $aceito = true;
    }
    
    $produtos = array();
    $produtos ["nome"] = $nomeproduto;
    $produtos ["cor"] = $cor;
    $produtos ["aceito"] = $aceito;
    $produtos ["prazo"] = $prazoentrega;
    $produtos ["detalhes"] = $detalhes;

    array_push($_SESSION["cadastros"], $produtos);

    echo "Cadastro dos produtos efetuado com sucesso!";

?>
  
  
