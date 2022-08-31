<div class="titulo">Excluir registro #01</div>
<?php
require_once "conexao.php";
$sql = "DELETE FROM cadastro WHERE id = 3";

$conexao = novaconexao();
$resultado = $conexao->query($sql);

if ($resultado){
    echo 'sucesso :)';
} else{
    echo "error : " . $conexao->error;
}

$conexao->close();