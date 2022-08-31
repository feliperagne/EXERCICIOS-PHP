<?=
session_start();
print_r($_SESSION);
?>
<p>
    <b>Nome: </b><?= $_SESSION['nome']?>
    <br>
    <b>Email: </b><?= $_SESSION['email']?>
</p>

<?=
$_SESSION['email'] = 'gabrielfilho_alterado@gmail.com';
$_SESSION['nome'] = 'gabriel mulekote';
?>

<p>
    <a href="sessao_basico.php">Voltar</a>
</p>

<p>
    <a href="basico_sessao_limpar.php">Limpar Sessão</a>
</p>
