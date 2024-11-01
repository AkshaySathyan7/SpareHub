<?php
session_start();
// Initialize cart if not already done
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Spare Hub - Two Wheeler Spare Parts</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Open Sans', sans-serif;
        }

        body {
            background-color: #f9f9f9;
            display: flex;
            height: 100vh;
        }

        .sidebar {
            background-color: #3498db;
            color: #fff;
            width: 250px;
            padding: 20px;
            display: flex;
            flex-direction: column;
            transition: background-color 0.3s ease;
        }

        .sidebar a {
            color: #fff;
            text-decoration: none;
            margin: 15px 0;
            font-size: 18px;
            position: relative;
            transition: color 0.3s ease;
            display: flex;
            align-items: center;
        }

        .sidebar a:hover {
            color: #f1c40f;
        }

        .header {
            background-color: #3498db;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 60px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        .main-content {
            flex-grow: 1;
            padding: 20px;
            overflow-y: auto;
            background-color: #f9f9f9;
            width: calc(100% - 250px);
        }

        .cart {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin: 20px 0;
        }

        h1 {
            margin-bottom: 20px;
            color: #3498db;
            font-size: 24px;
        }

        .cart ul {
            list-style-type: none;
            padding: 0;
        }

        .cart li {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 0;
            border-bottom: 1px solid #ddd;
        }

        .cart li:last-child {
            border-bottom: none;
        }

        .cart-item {
            color: #333;
            font-size: 18px;
        }

        .remove-btn {
            background-color: #e74c3c;
            color: #fff;
            border: none;
            padding: 5px 10px;
            font-size: 14px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .remove-btn:hover {
            background-color: #c0392b;
        }

        .btn {
            background-color: #3498db;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-top: 20px;
        }

        .btn:hover {
            background-color: #f1c40f;
        }
    </style>
</head>

<body>
    <div class="sidebar">
        <h2>Spare Hub<i class="fa-regular fa-user"></i></h2>
        <a href="userdash.php" class="fade-in"><i class="fas fa-home"></i> Home</a>
        <a href="edit-pass.php" class="fade-in"><i class="fas fa-list"></i> Profile</a>
        <a href="complaint.php" class="fade-in"><i class="fa-solid fa-comment"></i> Complaint</a>
        <a href="feedback.php" class="fade-in"><i class="fa-solid fa-pen"></i> Feedback</a>
        <a href="cart.php" class="fade-in"><i class="fas fa-shopping-cart"></i> Cart</a>
        <a href="profile.php" class="fade-in"><i class="fas fa-file-alt"></i> Orders</a>
        <a href="logout.php" class="fade-in"><i class="fas fa-sign-out-alt"></i> Logout</a>
    </div>

    <div class="main-content">
        <div class="header">
            <div class="logo">
                <img src="assets/Spare Hub.png" width="50" height="50" alt="Spare Hub Logo">
                <span style="color: white;">Spare Hub</span>
            </div>
        </div>

        <div class="cart">
            <h1>Your Cart</h1>
            <?php if (empty($_SESSION['cart'])): ?>
                <p>Your cart is currently empty.</p>
            <?php else: ?>
                <ul>
                    <?php foreach ($_SESSION['cart'] as $item): ?>
                        <li>
                            <span class="cart-item"><?php echo htmlspecialchars($item); ?></span>
                            <button class="remove-btn">Remove</button>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
            <button class="btn" onclick="location.href='checkout.php'">Proceed to Checkout</button>
        </div>
    </div>
</body>

</html>
