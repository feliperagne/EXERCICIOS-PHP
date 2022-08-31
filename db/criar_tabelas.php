<div class="titulo">Criar tabelas</div>
<?php
require_once "conexao.php";
$sql = "CREATE TABLE IF NOT EXISTS cadastro( 
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    nascimento VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    site VARCHAR(100),
    filhos INT,
    salario FLOAT
    )";

    $conexao = novaconexao();
    $resultado = $conexao->query($sql);

    if($resultado){
        echo 'sucesso :)';
    } else{
        echo "erro: " . $conexao->error;
    }
    
    $conexao->close();