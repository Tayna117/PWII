<?php include "cabecalho.php"; ?>

<?php

if( isset($_POST['id']) && !empty($_POST['id']) &&
isset($_POST['nome']) && !empty($_POST['nome']) &&
)
{
    include "conexao.php";
    $sql = "UPDATE CATEGORIAS SET nome = '$_POST[nome]',
            WHERE id = $_POST[id]";

     echo $sql;
    $resultado = $conexao->query($sql);
    if($resultado)
    {
        //logica para mensagem de sucesso
    }
    else
    {
        //caso o update de false
    }
}
if(isset($_GET["id"]) && !empty($_GET["id"]))
{
    include "conexao.php";
    $sql = "Select id, nome from categorias where id = $_GET[id]";
    $resultado = $conexao->query($sql);
    if($resultado)
    {
        if($resultado->num_rows > 0){

        
            while($row = $resultado->fetch_assoc())
            {
                $id =$row["id"];
                $nome = $row["nome"];
            }
        }
        else
        {
            header("location: categorias.php?erro=Nenhum registro encontrado");
        }
        
    }
    else
    {
        header("location: categorias.php?erro=Erro do if do resultado");
    }
}
else
{
    header("location: categorias.php?erro=Nenhum id informado");
}



?>

<form action="editar_categoria.php?Id=<?php echo $id; ?>" method="post">
    <input name="id" value="<?php echo $id ?>"/>
    <input name="nome" value="<?php echo $nome ?>"/>
    <button type="submit">
        Salvar alterações
    </button>
    

</form>

<?php include "rodape.php"; ?>