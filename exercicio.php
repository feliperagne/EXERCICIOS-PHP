<?php
session_start();
if($_COOKIE['usuario']){
	$_SESSION['usuario'] = $_COOKIE['usuario'];
}

if(!$_SESSION['usuario']){
	header('Location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/estilo.css">
    <link rel="stylesheet" href="assets/css/exercicio.css">
    <title>Exercício</title>
</head>
<body class="exercicio">
    <header class="cabecalho" style="padding-left:40.5rem; padding-right:40.5rem;">
        <h1>Projeto em PHP</h1>
        <h2>Visualização do Exercício</h2>
    </header>
    <nav class="navegacao">
    <span class="usuario">Usuário Logado:<?= $_SESSION['usuario']?></span>
        <a href=<?= "/{$_GET['dir']}/{$_GET['file']}.php" ?> 
            class="verde">Sem formatação</a>
        <a href="indexcurso.php" class="vermelho">Voltar</a>
        <a href="logout.php" class="vermelho">Sair</a> 
    </nav>
    <main class="principal">
        <div class="conteudo">
            <?php
                include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php");
            ?>
        </div>
    </main>
    <footer class="rodape">
        Felipe Silveira <?= date('Y'); ?>
    </footer>
</body>
</html>




