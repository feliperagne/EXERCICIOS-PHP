<div class="titulo">Criar Banco</div>
<?php
require_once "conexao.php";
$conexao = novaconexao(null);
$sql = 'CREATE DATABASE IF NOT EXISTS projeto_php';

$resultado = $conexao->query($sql);

if($resultado){
    echo 'sucesso :)';
} else{
    echo "erro: " . $conexao->error;
}

$conexao->close();