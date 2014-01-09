<?php
    require_once("menu.php");
    
    session_start();

    if(isset($_SESSION["cadastros"])){
        
        $cadastros = $_SESSION["cadastros"];
        
        echo"<dl>";
        foreach($cadastros as $pessoa){
            if($pessoa != null){
              echo "<dt>" . $pessoa["nome"] . "</dt>";
              echo "<dd>Sexo: " . $pessoa["sexo"] . "</dd>";
            }
            
        }
        echo "</dl>";
    }
    else{
        echo "Não existem pessoas cadastradas";
    }

?>
