<h1>Funções nativas</h1>
<p>Funções Nativas são funções que o proprio php nos fornece. Como por exemplo:
    a função isset(), //Verifica se existe a variável
    a função empty(), //Verifica se a variável está vazia
    a função count(), //Conta quantos itens tem no array
    a função include "", //Inclui um arquivo dentro dos outros
    a função echo "", //imprime na tela
    a função strlen(), //Conta quantos caracteres tem uma string
    a função explode(), //Cria um array a partir de uma frase
    a função replace(), //Troca caracteres dentro de uma string


<?php
    echo "<h1>";
    echo date("H:i:s");
    echo "</h1>";
?>
Ano - mês - dia
<?php
    echo "<h1>";
    echo date("Y-m-d");
    echo "</h1>";
?>

getdate()
<?php
    echo "<h1>";
    $array_data = getdate();
    echo $array_data["mday"]."/".$array_data["mon"]."/".$array_data["year"];
    echo "</h1>";

    echo "<h1>";
    echo rand (5, 15);
    echo "</h1>";
?>

<h1>Funções personalizadas</h1>