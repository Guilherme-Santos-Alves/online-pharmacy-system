<?php
include 'conexao.php';

$pessoa_id = $_SESSION['usuario_id']; 
$sql = "SELECT p.nome, p.valor FROM carrinho c JOIN produtos p ON c.produto_id = p.id WHERE c.pessoa_id = '$pessoa_id'";

$result = $conexao->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<li class="list-group-item d-flex justify-content-between lh-condensed">
        <div>
            <h6 class="my-0">' . htmlspecialchars($row['nome']) . '</h6>
        </div>
        <span class="text-muted">R$ ' . number_format($row['valor'], 2, ',', '.') . '</span>
      </li>';

    }
} else {
    echo '<li class="list-group-item">Carrinho vazio</li>';
}

$conexao->close();
?>
