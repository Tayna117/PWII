<?php include "cabecalho.php"; ?>

<?php
    if(     isset($_POST["Id"]) 
         && isset($_POST["Nome"]) 
      )
    {
        

        $datavalidade = $_POST["datavalidade"];

        if( empty($_POST["nome"]) )
        {
            echo "<br><div class='alert alert-danger'>
                    Campo nome não pode estar em branco
                    </div>";
        }
        else if(empty($_POST["valor"]) )
        {
            echo "<br><div class='alert alert-danger'>
                    Campo Valor não pode estar em branco
                    </div>";
        }
        else if(empty($_POST["codigobarras"]) )
        {
            echo "<br><div class='alert alert-danger'>
                    Campo Código de barras não pode estar em branco
                    </div>";
        }else if(empty($_POST["datavalidade"]) )
        {
            echo "<br><div class='alert alert-danger'>
                    Campo Data de Validade  não pode estar em branco
                    </div>";
        }
        else
        {
            include "conexao.php";
            
            $nome = $_POST["nome"];
            $valor =  str_replace( "," , ".", $_POST["valor"] ) ;
            $codigobarras = $_POST["codigobarras"];

            $query = "INSERT INTO categorias (ID, NOME)
            
                     VALUES ( '$nome', $Id) ";

            $resultado = $conexao->query($query);
            if($resultado)
            {
                echo "<div class='alert alert-success'>
                         Salvo no banco com sucesso 
                      </div>" ;
            }else{
                echo "<div class='alert alert-danger'>
                         Ocorreu algum erro ao salvar
                      </div>" ;
            }

            //Executa a lógica do programa
            //salvar no banco   
           
        }
        
    }else{
        $nome = "";
        $Id = "";
       
    }
?>

<form action="novo_produto.php" method="post">
    <label>Nome</label>
    <input type="text" name="nome" value="<?php echo $nome; ?>" />
    <br>
    <label>Id</label>
    <input type="number" name="valor" value="<?php echo $Id; ?>" />
    <br>
    <button type='submit' class='btn btn-success'>
        Enviar os dados
    </button>
</form>

<?php include "rodape.php"; ?>