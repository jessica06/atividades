<?php
require_once("menu.php");

    session_start();

    if(!isset($_SESSION["cadastros"])){
        $_SESSION["cadastros"] = array ();
    }
    
    $nome = $_REQUEST["nome"];
    $sexo = $_REQUEST["sexo"];
    
    $pessoa = array();
    $pessoa ["nome"] = $nome;
    $pessoa ["sexo"] = $sexo;
    
    array_push($_SESSION["cadastros"], $pessoa);

    echo "Cadastro efetuado com sucesso!";


?>

