<?php
session_start();
include 'db.php';

$query = "SELECT * FROM products";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <header>
        <h1>Loja de Brinquedos</h1>
        <a href="carrinho.php">Carrinho</a>
        <?php if (isset($_SESSION['username'])): ?>
            <a href="logout.php">Sair</a>
        <?php else: ?>
            <a href="login.php">Login</a>
        <?php endif; ?>
    </header>
    <div class="products">
        <?php while ($product = $result->fetch_assoc()): ?>
            <div class="product">
                <img src="imgs/<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>">
                <h2><?php echo $product['name']; ?></h2>
                <p><?php echo $product['description']; ?></p>
                <p>R$ <?php echo number_format($product['price'], 2, ',', '.'); ?></p>
                <a href="adicionar.php?id=<?php echo $product['id']; ?>">Adicionar ao Carrinho</a>
            </div>
        <?php endwhile; ?>
    </div>
</body>

</html>