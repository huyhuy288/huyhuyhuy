<?php include 'views/layout/header.php'; ?>

<div class="container">
    <h2>Danh sách sản phẩm</h2>
    <table>
        <tr>
            <th>Tên</th>
            <th>Giá</th>
            <th>Hành động</th>
        </tr>
        <?php foreach ($products as $product): ?>
        <tr>
            <td><?= $product['name'] ?></td>
            <td><?= number_format($product['price'], 0, ',', '.') ?> VND</td>
            <td><a class="btn" href="index.php?controller=cart&action=add&id=<?= $product['id'] ?>">Thêm vào giỏ</a></td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>

<?php include 'views/layout/footer.php'; ?>

<link rel="stylesheet" href="assets/style.css">

