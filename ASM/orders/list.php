<?php
require '../includes/db.php';
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: ../login.php');
    exit();
}

// Lấy danh sách đơn hàng
$stmt = $pdo->query("SELECT * FROM orders");
$orders = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quan li don hang</title>
</head>
<body>
    <div class="container">
        <h2>Danh sách Đơn hàng</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Khách hàng</th>
                    <th>Tổng tiền</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($orders as $order): ?>
                    <tr>
                        <td><?php echo $order['id']; ?></td>
                        <td><?php echo $order['customer_name']; ?></td>
                        <td><?php echo number_format($order['total'], 0, ',', '.') . ' VNĐ'; ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $order['id']; ?>" class="btn btn-warning">Sửa</a>
                            <a href="delete.php?id=<?php echo $order['id']; ?>" class="btn btn-danger">Xóa</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <a href="add.php" class="btn btn-success">Thêm Đơn hàng</a>
    </div>
</body>
</html>
