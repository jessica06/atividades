<?php
    $nome = $_REQUEST ["nome"];
    $senha = $_REQUEST ["senha"];
    
    $salvarSenha = false;
    if(isset($_REQUEST["salvar"])) {
        $salvarSenha = true;
    }
    echo "O usuário tentou fazer login com o nome $nome <br/>";

    if($salvarSenha){
        echo"O usuário permite salvar sua senha - $senha";
    }
    else{
        echo"O usuário NÃO permite salvar sua senha. " . sha1($senha);
    }
?>
