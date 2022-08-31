<div class="titulo">Excluir usando PDO</div>

<?php
require_once "conexao_pdo.php";
$sql = "DELETE FROM cadastro WHERE id = ?";

$conexao=novaconexao();
$stmt = $conexao->prepare($sql);

if($stmt->execute([8])){
    echo 'sucesso :)';
} else {
    echo 'erro :(';
    print_r($stmt->errorInfo());
}











