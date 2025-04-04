<?php
require 'models/Cart.php';

class CartController {
    public function index() {
        $cart = Cart::getCart();
        require 'views/cart/index.php';
    }

    public function add() {
        $productId = $_GET['id'] ?? null;
        if ($productId) {
            Cart::addToCart($productId);
        }
        header("Location: index.php?controller=cart");
    }

    public function remove() {
        $productId = $_GET['id'] ?? null;
        if ($productId) {
            Cart::removeFromCart($productId);
        }
        header("Location: index.php?controller=cart");
    }

    public function update() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $productId = $_POST['id'];
            $quantity = $_POST['quantity'];
            Cart::updateCart($productId, $quantity);
        }
        header("Location: index.php?controller=cart");
    }
}
?>

