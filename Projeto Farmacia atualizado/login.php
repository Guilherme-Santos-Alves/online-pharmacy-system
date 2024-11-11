<?php

include 'conexao.php';

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cpf = $conexao->real_escape_string($_POST['rg-cpf']);
    $senha = $_POST['rg-senha'];

    $sql = "SELECT * FROM pessoas WHERE cpf='$cpf'";
    $resultado = $conexao->query($sql);

    if ($resultado->num_rows > 0) {
        $usuario = $resultado->fetch_assoc();

        if ($senha === $usuario['senha']) {
            $_SESSION['usuario_id'] = $usuario['id'];
            $_SESSION['usuario_nome'] = $usuario['nome'];
            
            header("Location: http://localhost/home.php");
            exit();
        } else {
            echo "Senha incorreta!";
        }
    } else {
        echo "Usuário não encontrado!";
    }
}

$conexao->close();
?>