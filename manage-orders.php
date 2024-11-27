<?php

@include 'configs.php';

// Handle order status update
if (isset($_POST['accept_order'])) {
    $order_id = $_POST['order_id'];
    $update_status_query = mysqli_query($conn, "UPDATE `order` SET status='Accepted' WHERE id='$order_id'") or die('Query Failed');
    if ($update_status_query) {
        $message[] = 'Order accepted successfully!';
    } else {
        $message[] = 'Failed to accept order.';
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Orders</title>
    <!-- css link -->
    <link rel="stylesheet" href="./css/manage_orders.css">
</head>

<body>

<header class="header">
    <div class="flex">
        <a href="admin.php" class="logo">HAZUNO CREATIVE - ADMIN</a>
        <nav class="navbar">
            <a href="admin.php">Add Products</a>
            <a href="manage-orders.php">Manage Orders</a>
            <a href="log-out.php">Logout</a>
        </nav>
    </div>
</header>

<div class="container">
    <h1 class="heading">Manage Orders</h1>

    <?php
    if (isset($message)) {
        foreach ($message as $msg) {
            echo '<div class="message"><span>' . $msg . '</span> <i class="fas fa-times" onclick="this.parentElement.style.display=`none`;"></i> </div>';
        }
    }
    ?>

    <table>
        <thead>
            <tr>
                <th>Order ID</th>
                <th>Customer Name</th>
                <th>Email</th>
                <th>Total Products</th>
                <th>Total Price</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $orders_query = mysqli_query($conn, "SELECT * FROM `order`") or die('Query Failed');
            if (mysqli_num_rows($orders_query) > 0) {
                while ($order = mysqli_fetch_assoc($orders_query)) {
            ?>
                    <tr>
                        <td><?= $order['id']; ?></td>
                        <td><?= $order['name']; ?></td>
                        <td><?= $order['email']; ?></td>
                        <td><?= $order['total_products']; ?></td>
                        <td>RM<?= $order['total_price']; ?></td>
                        <td><?= $order['status']; ?></td>
                        <td>
                            <?php if ($order['status'] == 'Pending') { ?>
                                <form method="post">
                                    <input type="hidden" name="order_id" value="<?= $order['id']; ?>">
                                    <button type="submit" name="accept_order" class="btn">Accept</button>
                                </form>
                            <?php } else { ?>
                                <span class="accepted">Accepted</span>
                            <?php } ?>
                        </td>
                    </tr>
            <?php
                }
            } else {
                echo "<tr><td colspan='7'>No orders found</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>

<script src="js/script.js"></script>
</body>

</html>
