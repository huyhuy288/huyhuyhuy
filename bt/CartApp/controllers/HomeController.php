<?php
require 'models/Product.php';

class HomeController {
    public function index() {
        $products = Product::getAll();
        require 'views/home/index.php';
    }
}
?>

