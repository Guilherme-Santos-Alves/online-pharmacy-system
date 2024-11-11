<?php
include 'conexao.php';

try {
    $sql = "SELECT produtos.id, produtos.nome, produtos.valor, imagens_produtos.url_imagem 
            FROM produtos 
            JOIN imagens_produtos ON produtos.id = imagens_produtos.produto_id";
    $stmt = $conexao->query($sql);

    while ($produto = $stmt->fetch_assoc()) {
        echo '    <div class="card" style="width: 18rem;">';
        echo '      <form action="add-carrinho.php" method="POST" style=" display: grid; align-items: center;">'; // Corrigido aqui
        echo '        <img src="' . htmlspecialchars($produto['url_imagem']) . '" class="card-img-top" style="width: 150px; height: 150px;">';
        echo '        <div class="card-body">';
        echo '            <p class="card-text">' . htmlspecialchars($produto['nome']) . ' - R$ ' . number_format($produto['valor'], 2, ',', '.') . '</p>';
        echo '            <input type="hidden" name="produto_id" value="' . $produto['id'] . '">';
        echo '            <button class="btn btn-primary" type="submit">Adicionar ao carrinho</button>';
        echo '        </div>';
        echo '      </form>';
        echo '    </div>';
    }
} catch (Exception $e) {
    echo "Erro: " . $e->getMessage();
}
?>