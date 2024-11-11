<?php
session_start(); // Start session to track cart items

// Check if the user is adding an item to the cart
if (isset($_POST['action']) && $_POST['action'] == 'add') {
    $partname = $_POST['partname'];
    $price = $_POST['price'];
    $shop = $_POST['shop'];

    // Initialize cart in session if not already
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }

    // Check if the item is already in the cart
    $itemFound = false;
    foreach ($_SESSION['cart'] as &$item) {
        if ($item['partname'] == $partname) {
            $item['quantity']++;  // Increase quantity if the item is already in the cart
            $itemFound = true;
            break;
        }
    }

    // If the item is not found in the cart, add it
    if (!$itemFound) {
        $_SESSION['cart'][] = array(
            'partname' => $partname,
            'price' => $price,
            'shop' => $shop,
            'quantity' => 1 // Initialize quantity to 1
        );
    }
}

// Connect to the database
$con = mysqli_connect("localhost", "root", "", "sparehub");
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check for a search query and filter results
$searchQuery = '';
if (isset($_GET['search'])) {
    $searchQuery = mysqli_real_escape_string($con, $_GET['search']);
    $query = "SELECT * FROM spare_parts WHERE company='Honda' AND partname LIKE '%$searchQuery%'";
} else {
    $query = "SELECT * FROM spare_parts WHERE company='Honda'";
}

$result = mysqli_query($con, $query) or die("Couldn't connect to server: " . mysqli_error($con));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Honda Spare Parts</title>
    <link rel="stylesheet" href="styles.css">
    <style>
      /* Global reset and basic styles */
* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

body {
    font-family: Arial, sans-serif;
    background-color: #eaeaea;
    display: flex;
    min-height: 100vh;
    flex-direction: column;
}

.header {
    background-color: #181717;
    padding: 20px;
    text-align: center;
    color: white;
}

.header img {
    max-width: 150px;
    margin-bottom: 10px;
}

.header h1 {
    margin: 0;
}

.sidebar {
    background-color: #3498db;
    color: #fff;
    width: 250px;
    padding: 20px;
    display: flex;
    flex-direction: column;
    position: fixed; /* Fixed position for sidebar */
    height: 100vh;
    top: 0;
    left: 0;
    z-index: 100;
    box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
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

.sidebar a::after {
    content: '';
    position: absolute;
    left: 0;
    bottom: -5px;
    width: 100%;
    height: 2px;
    background: #f1c40f;
    transform: scaleX(0);
    transition: transform 0.3s ease;
}

.sidebar a:hover::after {
    transform: scaleX(1);
}

.sidebar i {
    margin-right: 10px;
}

/* Content container */
.main-content {
    margin-left: 250px; /* Sidebar width */
    padding: 20px;
    width: calc(100% - 250px);
    min-height: 100vh;
    background-color: #f8f8f8;
}

.search-bar {
    margin: 20px auto;
    max-width: 600px;
}

.search-bar input {
    width: 80%;
    padding: 10px;
    border: none;
    border-radius: 4px;
    outline: none;
}

.search-bar button {
    padding: 10px;
    border: none;
    background-color: #ff9800;
    color: white;
    border-radius: 4px;
    cursor: pointer;
}

.product-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    margin: 20px;
}

.product-card {
    background: white;
    border-radius: 8px;
    margin: 10px;
    padding: 15px;
    width: 200px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
    text-align: center;
    transition: transform 0.2s;
}

.product-card:hover {
    transform: scale(1.05);
}

.product-card img {
    max-width: 100%;
    height: auto;
    border-radius: 4px;
}

.product-card h3 {
    font-size: 18px;
    margin: 10px 0;
}

.product-card p {
    color: #888;
    margin: 5px 0;
}

.product-card .price {
    color: #ff5722;
    font-weight: bold;
    margin: 10px 0;
}

.footer {
    text-align: center;
    padding: 20px;
    background-color: #333;
    color: white;
    position: relative;
    bottom: 0;
    width: 100%;
    margin-top:238px;
}

.buy-button, .cart-button {
    background-color: #ffa726;
    color: white;
    border: none;
    padding: 10px 15px;
    border-radius: 5px;
    cursor: pointer;
    transition: background 0.3s;
}

.cart-button {
    margin-top: 20px;
}

    </style>
</head>
<body>
<div class="sidebar">
        <h2>Spare Hub<i class="fa-regular fa-user"></i></i></h2>
        <a href="userdash.php" class="fade-in"><i class="fas fa-home"></i> Home</a>
        <a href="edit-pass.php" class="fade-in"><i class="fas fa-list"></i>Profile</a>
        <a href="complaint.php" class="fade-in"><i class="fa-solid fa-comment"></i> Complaint</a>
        <a href="feedback.php" class="fade-in"><i class="fa-solid fa-pen"></i> Feedback</a>
        <a href="cart.php" class="fade-in"><i class="fas fa-shopping-cart"></i> Cart</a>
        <a href="profile.php" class="fade-in"><i class="fas fa-file-alt"></i> Orders</a>
        <a href="logout.php" class="fade-in"><i class="fas fa-sign-out-alt"></i> Logout</a>
    </div>

    <header class="header">
        <img src="/assets/honda.png" alt="Honda Logo">
        <h1>Honda Spare Parts Store</h1>
        <div class="search-bar">
            <form action="" method="GET">
                <input type="text" name="search" placeholder="Search for spare parts..." value="<?php echo htmlspecialchars($searchQuery); ?>">
                <button type="submit">Search</button>
            </form>
        </div>
    </header>

    <main>
        <section class="product-container">
            <?php 
            while ($row = mysqli_fetch_array($result)): 
                // Check if the part is already in the cart
                $isInCart = false;
                if (isset($_SESSION['cart'])) {
                    foreach ($_SESSION['cart'] as $cartItem) {
                        if ($cartItem['partname'] == $row['partname']) {
                            $isInCart = true;
                            break;
                        }
                    }
                }
            ?>
                <div class="product-card">
                    <h3><?php echo $row['partname']; ?></h3>
                    <p><?php echo $row['p_comp']; ?></p>
                    <div class="price">$<?php echo number_format($row['price'], 2); ?></div>

                    <!-- Add to Cart form -->
                    <form action="" method="POST">
                        <input type="hidden" name="partname" value="<?php echo $row['partname']; ?>">
                        <input type="hidden" name="price" value="<?php echo $row['price']; ?>">
                        <input type="hidden" name="shop" value="<?php echo $row['sho']; ?>">
                        <input type="hidden" name="comp" value="<?php echo $row['p_comp']; ?>">

                        <!-- Conditionally disable the "Add to Cart" button if the item is already in the cart -->
                        <button type="submit" class="cart-button" name="action" value="add" <?php echo $isInCart ? 'disabled' : ''; ?>>
                            <?php echo $isInCart ? 'Added to Cart' : 'Add to Cart'; ?>
                        </button>
                    </form>
                    <br>

                    <!-- Buy Now form -->
                    <!-- Add your Buy Now button/form here if necessary -->
                </div>
            <?php endwhile; ?>
        </section>
    </main>
    <?php mysqli_close($con); ?>

    <footer class="footer">
        <p>&copy; 2024 Honda Spare Parts Store</p>
    </footer>
</body>
</html>
