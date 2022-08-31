<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<div class="titulo">Excluir dados #02</div>
<?php
    require_once "conexao.php";
    $registros = [];
    $conexao = novaconexao();

    if($_GET['excluir']){
        $excluirsql = "DELETE FROM cadastro WHERE id = ?"; //O PONTO DE INTERROGAÇAO SIGNIFICA QUE QUANDO EU CLICAR NUM ID VAI EXCLUIR O ID QUE EU CLICAR, E NAO UM ID PRÉ ESTABELECIDO
     /* statement ->*/   $stmt = $conexao->prepare($excluirsql); //comando pra excluir o dado no sql
        $stmt->bind_param("i",$_GET['excluir']);
        $stmt->execute();
    }


    $sql = "SELECT id,nome,email,nascimento FROM cadastro";
    $resultado = $conexao->query($sql);
    

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
    <th>Email</th>
    <th>Nascimento</th>
    <th>Ações</th>
</thead>
<tbody>
    <?php foreach($registros as $registro):?>
        <tr>
            <td><?=$registro['id']?></td>
            <td><?= $registro['nome'] ?></td>
            <td><?= $registro['email'] ?></td>
            <td><?= 
            date('d/m/Y',strtotime($registro['nascimento']))
            ?>
            </td>
            <td> <a href="/exercicio.php?dir=db&file=excluir2&excluir=<?=$registro['id']?>" class="btn btn-danger">Excluir</a></td>
        </tr>
        <?php endforeach ?>
</tbody>
</table>

<style>
    table>*{
        font-size: 1.2rem;
    }
</style>