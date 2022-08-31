<div class="titulo">Inserir dados usando PDO</div>
<?php
require_once "conexao_pdo.php";

$sql = "INSERT INTO cadastro (
    nome,email,nascimento,site,filhos,salario)
    VALUES (
        'Felipao loko',
        'felipe@lek.com',
        '2001-06-07',
        'https://www.lek.com',
        0,
        3000
    )";

    $conexao = novaconexao();

    if($conexao->exec($sql)){
        $id = $conexao->lastInsertId();
        echo "novo cadastro com o id $id!";
    } else{
        echo $conexao->errorCode();
        print_r($conexao->errorInfo());
    }
    $conexao->close();
