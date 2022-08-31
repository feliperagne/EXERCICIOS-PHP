<div class="titulo">Upload de arquivos</div>
<?php
print_r($_FILES);
if($_FILES && $_FILES['arquivo']){
    $pastaupload = 'C:\Users\frsil\Documents/';
    $nomearquivo = $_FILES['arquivo']['name'];
    $arquivo = $pastaupload . $nomearquivo;
    $tmp = $_FILES['arquivo']['tmp_name'];
}

if(move_uploaded_file($tmp, $arquivo)){
    echo 'arquivo válido e enviado com sucesso! <br>';
} else{
    echo '<br>erro no upload do arquivo!';
}



?>

<form action="#" method="post" enctype="multipart/form-data">
    <input name="arquivo" type="file">
    <button>Enviar</button>
</form>

<style>
    input,button{
        font-size: 1.2rem;
    }
</style>