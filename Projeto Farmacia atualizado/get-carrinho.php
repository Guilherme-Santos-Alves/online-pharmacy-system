<?php
session_start();
include 'conexao.php';

if (!isset($_SESSION['usuario_id'])) {
    echo "Você precisa estar logado para ver o carrinho.";
    exit();
}

$pessoa_id = $_SESSION['usuario_id'];

$sql = "SELECT produtos.id, produtos.nome, produtos.valor 
        FROM carrinho 
        JOIN produtos ON carrinho.produto_id = produtos.id
        WHERE carrinho.pessoa_id = '$pessoa_id'";

$stmt = $conexao->query($sql);

if ($stmt->num_rows > 0) {
    while ($produto = $stmt->fetch_assoc()) {
        echo '<div class="item-carrinho">';
        echo '    <ul class="item" id="veja-desengordurante">' . htmlspecialchars($produto['nome']) . ' - R$ ' . number_format($produto['valor'], 2, ',', '.') . '</ul>';
        echo '    <div class="botoes-interacao-carrinho">';
        echo '        <select name="quantidade[' . $produto['id'] . ']" class="quantidade-item-carrinho">';
        for ($i = 1; $i <= 10; $i++) {
            echo '            <option value="' . $i . '">' . $i . '</option>';
        }
        echo '        </select>';
        echo '        <button class="excluir-item-carrinho">';
        echo '            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">';
        echo '                <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5"/>';
        echo '            </svg>';
        echo '        </button>';
        echo '    </div>';
        echo '</div>';
    }
} else {
    echo "Seu carrinho está vazio.";
}

$conexao->close();
?>
