<div class="titulo">Inserir dados em tabela</div>
<?php

require_once "conexao.php";
$sql = "INSERT INTO cadastro
(nome,nascimento,email,site,filhos,salario)
VALUES (
'Priscilla',
'1990-03-10',
'priscilla@hotmail.com',
'https://priscilla.hotmail.com.br',
3,
10000.0
)";

$conexao = novaconexao();
$resultado = $conexao->query($sql);

if($resultado){
    echo "sucesso :)";
    } else{
        echo "erro: " . $conexao->error;
    }

    $conexao->close();