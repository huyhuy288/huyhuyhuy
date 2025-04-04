<?php
require 'config.php';

class Product {
    public static function getAll() {
        global $conn;
        $stmt = $conn->query("SELECT * FROM products");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>

