<div class="titulo">PDO: Consultar</div>

<?php
require_once "conexao_pdo.php";
$conexao = novaconexao();
$sql = "SELECT * from cadastro";
$resultado = $conexao->query($sql)->fetchAll(PDO::FETCH_ASSOC);
print_r($resultado);

echo "<hr>";

$sql = "SELECT * FROM cadastro LIMIT :qtde OFFSET :inicio";

$stmt = $conexao->prepare($sql);
$stmt->bindValue(':qtde', 2, PDO::PARAM_INT);
$stmt->bindValue(':inicio', 3, PDO::PARAM_INT);


if($stmt->execute()) {
    $resultado = $stmt->fetchAll();
    print_r($resultado);
} else {
    echo "Código: " . $stmt->errorCode() . "<br>";
    print_r($stmt->errorInfo());
}

echo "<hr>";

$sql = "SELECT * FROM cadastro WHERE id = :id";
$stmt = $conexao->prepare($sql);

if($stmt->execute([':id' => 12])) {
    $resultado = $stmt->fetch();
    print_r($resultado);
} else {
    echo "Código: " . $stmt->errorCode() . "<br>";
    print_r($stmt->errorInfo());
}

$conexao->close();