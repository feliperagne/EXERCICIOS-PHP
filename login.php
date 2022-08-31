<?php 
session_start();

$email = $_POST['email'];
$senha = $_POST['senha'];

if($_POST['email']) {
    $usuarios = [
        [
            "nome" => "felipe silveira",
            "email" => "felipe@hotmail.com",
            "senha" => "123",
        ],
        [
            "nome" => "gabriel loko",
            "email" => "gabriel@hotmail.com",
            "senha" => "123",
        ],
    ];

    foreach($usuarios as $usuario) {
        $emailValido = $email === $usuario['email'];
        $senhaValida = $senha === $usuario['senha'];

        if($emailValido && $senhaValida) {
            $_SESSION['erros'] = null;
            $_SESSION['usuario'] = $usuario['nome'];
            $exp = time() + 60 * 60 * 24 * 30;
            setcookie('usuario', $usuario['nome'], $exp);
            header('Location: indexcurso.php');
        }
    }

    if(!$_SESSION['usuario']) {
        $_SESSION['erros'] = ['Usuário/Senha inválido!'];
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/estilo.css">
    <link rel="stylesheet" href="assets/css/login.css">
    <title>Curso PHP</title>
</head>
<body class="login">
    <header class="cabecalho" style="padding-left:39.9rem; padding-right:39.9rem;">
        <h1>Projeto em PHP</h1>
        <h2>Seja Bem Vindo</h2>
    </header>
    <main class="principal">
        <div class="conteudo">
            <h3>Identifique-se para ter acesso aos exercicíos</h3>
            <?php if ($_SESSION['erros']): ?>
                <div class="erros">
                    <?php foreach ($_SESSION['erros'] as $erro): ?>
                        <p><?= $erro ?></p>
                    <?php endforeach ?>
                </div>
            <?php endif ?>
            <form action="#" method="post">
                <div>
                    <label for="email">E-mail</label>
                    <input type="email" name="email" id="email">
                </div>
                <div>
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" id="senha">
                </div>
                <button>Entrar</button>
            </form>
        </div>
    </main>
    <footer class="rodape">
        Felipe Silveira © <?= date('Y'); ?> Todos os direitos reservados.
    </footer>
</body>
</html>