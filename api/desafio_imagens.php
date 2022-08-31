<div class="titulo">Desafio imagens</div>
<?php
session_start();
$arquivos = $_SESSION['arquivos'] ?? []; //vai pegar os arquivos da session e mandar pra um array vazio
$pastaupload = __DIR__ . '/../files/';
$nomearquivo = $_FILES['arquivo']['name'];
$arquivo = $pastaupload . $nomearquivo;
$tmp = $_FILES['arquivo']['tmp_name'];
if(move_uploaded_file($tmp, $arquivo)){
    echo '<br>arquivo válido e enviado com sucesso!';
    $arquivos[] = $nomearquivo; //acrescentei o nome do arquivo dentro do array de arquivos
    $_SESSION['arquivos'] = $arquivos;
} else{
    echo 'arquivo nao pode ser enviado!';
}

?>
<form action="#" method="post" enctype="multipart/form-data">
<input name="arquivo" type="file">
 <button>Enviar</button>
</form>

<ul>
    <?php foreach($arquivos as $arquivo): ?>
    <?php if(strpos($arquivo , 'jpeg')>0): ?> /*filtrando a string pra mostrar apenas "jpeg"!
        <li>
            <img src="../files/<?= $arquivo?>" height="120">
            <?= $arquivo ?>
        </img>
        </li>
        <?php endif ?>
        <?php endforeach ?>
</ul>

<style>
    input,button{
        font-size: 1.2rem;
    }
</style>