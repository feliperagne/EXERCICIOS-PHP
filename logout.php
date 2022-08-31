<?php
session_start();
session_destroy();
unset($_COOKIE['usuario']);
setcookie('usuario' , ''); //ZERAR UM COOKIE
header('Location: login.php');
