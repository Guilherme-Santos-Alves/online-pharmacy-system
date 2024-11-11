<?php
session_start();
include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $produto_id = $_POST['produto_id'];
    $pessoa_id = $_SESSION['usuario_id'];

    $sql = "INSERT INTO carrinho (produto_id, pessoa_id) VALUES ('$produto_id', '$pessoa_id')";

    if ($conexao->query($sql) === TRUE) {
        echo "Produto adicionado ao carrinho com sucesso!";
    } else {
        echo "Erro ao adicionar ao carrinho: " . $conexao->error;
    }

    header("Location: http://localhost/home.php");
    exit();

    $conexao->close();
}
?>