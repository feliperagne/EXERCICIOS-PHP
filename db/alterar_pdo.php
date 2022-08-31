<div class="titulo">Alterar usando PDO</div>
<?php
require_once "conexao_pdo.php";
$sql = "UPDATE cadastro
SET nome = ?, nascimento = ? , email = ?,
 site = ?, filhos = ?, salario = ? WHERE id = ?";

 $conexao = novaconexao(); 
 $stmt = $conexao->prepare($sql);

 $resultado = $stmt->execute([
    'Gui filho',
    '1980-12-12',
    'gui@gui.com.br',
    'https://www.gui.com.br',
    3,
    5000,
    11
 ]);

 if($resultado){
    echo 'sucesso :)';
 } else{
    echo 'erro :(';
    print_r($stmt->errorInfo());
 }