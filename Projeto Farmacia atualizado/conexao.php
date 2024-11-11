<?php
$host = 'localhost';
$usuario = 'root';  
$senha = '';    
$banco = 'farmacia_db';

$conexao = new mysqli($host, $usuario, $senha, $banco);


if ($conexao->connect_error) {
    die("Falha na conexão: " . $conexao->connect_error);
}
?>