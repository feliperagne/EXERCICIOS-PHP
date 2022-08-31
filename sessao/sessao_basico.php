<div class="titulo">Basico de Sessão</div>
<?php
session_start(); //SEMPRE COMEÇAR COM ESSE COMANDO 
print_r($_SESSION);
echo '<br>';

if(!$_SESSION['nome']){
    $_SESSION['nome'] = 'gabriel';
}

if(!$_SESSION['email']){
    $_SESSION['email'] = 'gabriel@gmail.com';
}
print_r($_SESSION);
?>

<p>
    <a href="/sessao/basico_sessao_alterar.php">
        Alterar Sessão</a>
</p>