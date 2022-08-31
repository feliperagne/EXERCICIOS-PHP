<div class="titulo">Teste de require com pessoa.php e usuario.php</div>
<?php
require_once('usuario.php');
$usuario = new Usuario('felipe silveira', 19, 'lordfeeh');
$usuario->apresentar();
unset($usuario); //CHAMAR O DESTRUTOR