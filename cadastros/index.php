<style>
    .M{
        color: Chartreuse;
    }
    .F{
        color: #FF1493;
    }
</style>

<?php
    require_once("menu.php");
    
    session_start();

    if(isset($_SESSION["cadastros"])){
        
        $cadastros = $_SESSION["cadastros"];
        
        echo"<dl>";
        foreach($cadastros as $pessoa){
            $sexo = $pessoa["sexo"];
            $aceito = $pessoa["aceito"];
            $observacoes = $pessoa ["observacoes"];
            
            if($pessoa != null){
              echo "<dt  class='$sexo'>" . $pessoa["nome"] . "</dt>";
              echo "<dd>Sexo : " . $sexo . "</dd>";
              echo "<dd>Estado :" . $pessoa["estado"] . "</dd>";
              echo "<dd>Aceita o contrato:";
              if ($aceito){
                echo "Sim";
                    
                }
                else{
                    echo "Não";
                }
                echo "</dd>";
                echo "<dd>Observacoes:" . $pessoa["observacoes"] . "</dd>";
              
              
            }
            
        }
        echo "</dl>";
    }
    else{
        echo "Não existem pessoas cadastradas";
    }

?>
