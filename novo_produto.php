<?php //include "cabecalho.php"; ?>

<?php
    if(isset ($_POST["nome"]) && isset ($_POST["valor"]) && isset ($_POST["codigobarras"]) && isset ($_POST["datavalidade"]))
    {
        if(($_POST["nome"]))
        {
            echo "<div class = 'alert alert-danger'>
                    campo nome não pode estar em branco </div>";
        }
        else if(empty($_POST["valor"]))
        {
            echo "<div class = 'alert alert-danger'>
            campo valor não pode estar em branco </div>";

        } else if(empty($_POST["codigobarras"]))
        {

            echo "<div class = 'alert alert-danger'>
            campo codigo de barras não pode estar em branco </div>";

        } else if(empty($_POST["datavalidade"]))
        {

            echo "<div class = 'alert alert-danger'>
            campo data de validade não pode estar em branco </div>";

        }
        else
        {
            
        }
}
?>

<form action="novo_produto.php" method = "post">
<label>Nome</label>
<input type="text" name="nome" />
<br>
<label>Valor</label>
<input type="number" name="valor" />
<br>
<label>Código de barras</label>
<input type="text" name="codigobarras" />
<br>
<label>Data de Validade</label>
<input type="date" name="datavalidade" />
<br>
<button type= 'submit' class='bnt bnt-sucess'>
    Enviar os dados
</button>
</form>

<?php //include "rodape.php"; ?>