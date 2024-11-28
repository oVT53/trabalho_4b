<?php
include 'db.php';
$cart = isset($_COOKIE['cart']) ? json_decode($_COOKIE['cart'], true) : [];
if (!empty($cart)) {
    $ids = implode(',', array_map('intval', $cart));
    $query = "SELECT * FROM products WHERE id IN ($ids)";
    $result = $conn->query($query);
} else {
    $result = [];
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Carrinho de Compras</h1>
        <a href="index.php">Voltar à Loja</a>
    </header>
    <div class="cart-items">
        <?php if (!empty($cart)): ?>
            <?php while ($product = $result->fetch_assoc()): ?>
                <div class="cart-item">
                    <h2><?php echo $product['name']; ?></h2>
                    <p>R$ <?php echo number_format($product['price'], 2, ',', '.'); ?></p>
                </div>
            <?php endwhile; ?>
        <?php else: ?>
            <p>Seu carrinho está vazio.</p>
        <?php endif; ?>
    </div>
</body>
</html>
