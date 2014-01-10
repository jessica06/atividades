

<?php
require_once("menu.php");

    session_start();

    if(!isset($_SESSION["cadastros"])){
        $_SESSION["cadastros"] = array ();
    }
    
    /* Aqui é onde pega os dados do formulario*/
    $nome = $_REQUEST["nome"];
    $sexo = $_REQUEST["sexo"];
    $estado = $_REQUEST["estado"];
    $observacoes = $_REQUEST["observacoes"];
    /*FIM - */
    
    $aceito = false;
    if(isset($_REQUEST["aceito"])){
        $aceito = true;
    }
   
    /* preencher o cadastro da pessoa , o nome ,sexo, estado etc..*/
    $pessoa = array();
    $pessoa ["nome"] = $nome;
    $pessoa ["sexo"] = $sexo;
    $pessoa ["aceito"] = $aceito;
    $pessoa ["estado"] = $estado;
    $pessoa ["observacoes"] = $observacoes;
    
   /* array_push = coloca o cadastro novo no final da lista*/ 
    
    array_push($_SESSION["cadastros"], $pessoa);

    echo "Cadastro efetuado com sucesso!";


?>
