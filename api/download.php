<div class="titulo">Download de arquivo</div>
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
        <li>
            <a href="../files/<?= $arquivo?>">
            <?= $arquivo ?>
        </a>
        </li>
        <?php endforeach ?>
</ul>

<style>
    input,button{
        font-size: 1.2rem;
    }
</style>