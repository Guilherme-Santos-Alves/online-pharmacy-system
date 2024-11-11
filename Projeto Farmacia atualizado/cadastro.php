<?php

include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $conexao->real_escape_string($_POST['rg-nome']);
    $cpf = $conexao->real_escape_string($_POST['rg-cpf']);
    $nascimento = $conexao->real_escape_string($_POST['rg-nascimento']); 
    $telefone = $conexao->real_escape_string($_POST['rg-telefone']);
    $email = $conexao->real_escape_string($_POST['rg-email']);
    $senha = $conexao->real_escape_string($_POST['rg-senha']);

    $sql = "INSERT INTO pessoas (nome, cpf, nascimento, telefone, email, senha) VALUES ('$nome', '$cpf', '$nascimento', '$telefone', '$email', '$senha')";

    if ($conexao->query($sql) === TRUE) {
        echo "Pessoa cadastrada com sucesso!";
    } else {
        echo "Erro: " . $sql . "<br>" . $conexao->error;
    }
}

$conexao->close();
?>