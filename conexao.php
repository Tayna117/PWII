<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "pw_bd";

$script = "
    CREATE DATABASE PW_BD;
    USE PW_BD;
    CREATE TABLE (
        ID INT PRIMARY KEY AUTO_INCREMENT,
        DESCRICAO VARCHAR (150) NOT NULL,
        CODIGO_BARRAS VARCHAR (25) NOT NULL,
        VALOR DECIMAL (10,2) NOT NULL,
        IMAGEM VARCHAR (50) NOT NULL,
        ATIVO BIT NOT NULL
    );
    INSERT INTO PRODUTOS (DESCRICAO, CODIGO_BARRAS, VALOR, ATIVO) VALUES ('Amendoim Verde', '7898728640096', 5.50, 1);
    INSERT INTO PRODUTOS (DESCRICAO, CODIGO_BARRAS, VALOR, ATIVO) VALUES ('Goiabinha Saborosa', '7898728640725', 1.50, 1);

    
";

$conexao = new mysqli($servidor, $usuario, $senha, $banco);

if ($conexao->connect_error){
    die("Falha na conexão: " . $conexao->connect_error);
}
?>