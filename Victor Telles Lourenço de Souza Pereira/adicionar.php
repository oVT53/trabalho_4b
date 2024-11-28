<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $cart = isset($_COOKIE['cart']) ? json_decode($_COOKIE['cart'], true) : [];
    $cart[] = $id;
    setcookie('cart', json_encode($cart), time() + (86400 * 30), "/");
    header('Location: index.php');
}
?>
