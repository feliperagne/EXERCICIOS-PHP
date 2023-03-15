<?php

function novaconexao($banco = 'projeto_php'){
    $servidor = '127.0.0.1:3306';
    $usuario = 'root';
    $senha = 'root';

try{
    $conexao = new PDO("mysql:host=$servidor;dbname=$banco", //CONEXAO USANDO TODAS AS VARIAVEIS CRIADAS
    $usuario,$senha);
    return $conexao;
} catch (PDOException $e) {
    die('erro: ' . $e->getMessage());
    
    }

}

