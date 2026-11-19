<?php
// Desafio 1: array inicial + acréscimo de 3 novos produtos
$produtos = [
    "Hamburguer",
    "Pizza",
    "Batata frita",
    "Refrigerante",
    "Sorvete"
];

$produtos[] = "Milkshake";
$produtos[] = "Coxinha";
$produtos[] = "Suco natural";

// Desafio 4: array associativo $destaque
$destaque = [
    "nome" => "Hamburguer Artesanal",
    "categoria" => "Lanches",
    "preco" => 28.90
];

// Desafio 5 (extra): lista de 3 produtos com nome e preco
$catalogoExtra = [
    ["nome" => "Combo Duplo", "preco" => 42.00],
    ["nome" => "Porção de Nuggets", "preco" => 19.50],
    ["nome" => "Torta de Limão", "preco" => 14.00]
];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cardapio</title>
</head>
<body>
    <h1>Cardapio da Lanchonete</h1>

    <h2>Produto em destaque</h2>
    <p><strong>Nome:</strong> <?= htmlspecialchars($destaque["nome"]) ?></p>
    <p><strong>Categoria:</strong> <?= htmlspecialchars($destaque["categoria"]) ?></p>
    <p><strong>Preço:</strong> R$ <?= number_format($destaque["preco"], 2, ",", ".") ?></p>

    <!-- Desafio 2: terceiro produto (índice 2, pois começa no 0) -->
    <h2>Terceiro produto</h2>
    <p><?= htmlspecialchars($produtos[2]) ?></p>

    <!-- Desafio 1 e Desafio 3: lista completa + "Disponível para pedido" -->
    <h2>Todos os produtos</h2>
    <ul>
        <?php foreach ($produtos as $produto): ?>
            <li><?= htmlspecialchars($produto) ?> - Disponível para pedido</li>
        <?php endforeach; ?>
    </ul>

    <!-- Desafio 5 (extra): produtos com nome e preço -->
    <h2>Mais opções com preço</h2>
    <ul>
        <?php foreach ($catalogoExtra as $item): ?>
            <li>
                <?= htmlspecialchars($item["nome"]) ?> -
                R$ <?= number_format($item["preco"], 2, ",", ".") ?>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>