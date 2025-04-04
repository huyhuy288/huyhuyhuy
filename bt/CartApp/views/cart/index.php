<?php include 'views/layout/header.php'; ?>

<div class="container">
    <h2>Giỏ hàng</h2>
    <table>
        <tr>
            <th>Tên</th>
            <th>Giá</th>
            <th>Số lượng</th>
            <th>Tổng</th>
            <th>Hành động</th>
        </tr>
        <?php $total = 0; ?>
        <?php foreach ($cart as $id => $item): ?>
        <?php $subtotal = $item['price'] * $item['quantity']; $total += $subtotal; ?>
        <tr>
            <td><?= $item['name'] ?></td>
            <td><?= number_format($item['price'], 0, ',', '.') ?> VND</td>
            <td>
                <form method="post" action="index.php?controller=cart&action=update">
                    <input type="hidden" name="id" value="<?= $id ?>">
                    <input type="number" name="quantity" value="<?= $item['quantity'] ?>" min="1">
                    <button type="submit">Cập nhật</button>
                </form>
            </td>
            <td><?= number_format($subtotal, 0, ',', '.') ?> VND</td>
            <td>
                <a class="btn delete" href="index.php?controller=cart&action=remove&id=<?= $id ?>">Xóa</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    <h3>Tổng tiền: <?= number_format($total, 0, ',', '.') ?> VND</h3>
</div>

<?php include 'views/layout/footer.php'; ?>

<link rel="stylesheet" href="assets/style.css">


