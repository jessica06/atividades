<style>
    .Rosa{
        color: #FF3E96;
    }
    .Lilás{
        color:#E066FF ;
    }
    .Azul{
        color: #1E90FF;
    }
</style>


<?php
    require_once("menu.php");
    
    session_start();

    if(isset($_SESSION["cadastros"])){
        
        $cadastros = $_SESSION["cadastros"];
        
        echo"<dl>";
        foreach($cadastros as $produtos){
            $nomeproduto = $produtos["nome"];
            $cor = $produtos["cor"];
            $aceito = $produtos ["aceito"];
            
            if($produtos != null){
              echo "<dt  class='$cor'>" . $produtos["nome"] . "</dt>";
              echo "<dd class='$cor'>Cor : " . $cor . "</dd>";
              echo "<dd class='$cor'>Prazo: " . $produtos["prazo"] . "</dd>";
              echo "<dd class='$cor'>Detalhes:" . $produtos["detalhes"] . "</dd>";
              echo "<dd>Com Carreto:";
              if ($aceito){
                    echo "Sim";
                    
                }
                else{
                    echo "Não";
                }
                echo "</dd>";   
            }        
        }
        echo "</dl>";
       
        
      
    }
    else{
        echo "Não há produtos cadastrados";
    }
    
?>
