<head>
            <title>Cadastro de Produtos</title>
    </head>    
    <body>
        <?php
            require_once("menu.php");
        ?>
        <form action="editar.php" method="post">
            <label>Digite o código para editar o produto</label>
            <br/>
           <input type="text" name="id" />
           <br/><br/>
            <label> Novo nome do produto:</label>
            <br/>
           <?php require_once ("campos_produtos.php"); ?>
           <br/>
           <input type="submit" value="Editar" />  
        </form>    
        
        
        </body>
</html>
 
 
 <?php
    require_once("menu.php");
    
    session_start();

    if(isset($_SESSION["cadastros"])){
        $cadastros = $_SESSION["cadastros"];
        
        foreach($cadastros as $id => $produtos){
            if($produtos!= null) {
                echo " [$id] => " . $produtos["nome"] .  "<br/>";
            } 
        }
        
    }
    else{
        echo "Não existe nenhum produto cadastrado";
    }

?>
