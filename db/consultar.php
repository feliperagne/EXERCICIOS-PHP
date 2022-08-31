<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

<div class="titulo">Consultar registro</div>
<?php
require_once "conexao.php";

$sql = "SELECT id,nome,nascimento,email FROM cadastro";

$conexao = novaconexao();
$resultado = $conexao->query($sql);

$registro = [];

if ($resultado->num_rows > 0) {
    while($row = $resultado->fetch_assoc()) {
        $registros[] = $row;
    }
 } elseif($conexao->error) {
    echo "Error: ".$conexao->error;
 }

 $conexao->close();
 ?>


<table class="table table-striped table-bordered table-hover">
    <thead>
        <th>Id</th>
        <th>Nome</th>
        <th>Nascimento</th>
        <th>E-mail</th>
    </thead>
    <tbody>
        <?php foreach($registros as $registro): ?>
            <tr>
                <td><?= $registro['id']?></td>
                <td><?= $registro['nome']?></td>
                <td><?= 
                    date('d/m/Y',strtotime($registro['nascimento']));                
                ?>
                </td>
                <td><?= $registro['email']?></td>

            </tr>
            <?php endforeach ?>
    </tbody>
</table>

<style>
    table>*{
        font-size: 1.2rem;
    }
</style>