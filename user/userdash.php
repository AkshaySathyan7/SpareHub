<?php
session_start();
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

        .header {
            background-color: #3498db;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 60px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        .header .logo {
            display: flex;
            align-items: center;
        }

        .header .logo img {
            margin-right: 10px;
        }

        .main-content {
            flex-grow: 1;
            padding: 20px;
            overflow-y: auto;
            background-color: #f9f9f9;
            width: calc(100% - 250px);
        }

        .card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin: 20px 0;
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        h1 {
            margin-bottom: 20px;
            color: #3498db;
        }

        .categories {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        .category-card {
            background-color: #f7f7f7;
            border-radius: 10px;
            padding: 20px;
            margin: 10px;
            flex: 1 1 30%;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .category-card:hover {
            transform: scale(1.05);
        }

        .category-card img {
            width: 200px;
            height: 100px;
            object-fit: contain;
            border-radius: 10px 10px 0 0;
        }

        .category-card h2 {
            margin-top: 10px;
            color: #3498db;
        }

        .category-card p {
            color: #666;
        }

        .category-card .btn {
            background-color: #3498db;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .category-card .btn:hover {
            background-color: #f1c40f;
        }
    </style>
</head>

<body>
    <div class="sidebar">
        <h2>Spare Hub<i class="fa-regular fa-user"></i></i></h2>
        <a href="userdash.php" class="fade-in"><i class="fas fa-home"></i> Home</a>
        <a href="edit-pass.php" class="fade-in"><i class="fas fa-list"></i>Profile</a>
        <a href="categories.html" class="fade-in"><i class="fas fa-list"></i> Categories</a>
        <a href="cart.html" class="fade-in"><i class="fas fa-shopping-cart"></i> Cart</a>
        <a href="profile.html" class="fade-in"><i class="fas fa-file-alt"></i> Orders</a>
        <a href="logout.html" class="fade-in"><i class="fas fa-sign-out-alt"></i> Logout</a>
    </div>

    <div class="main-content">
        <div class="header">
            <div class="logo">
                <img src="assets/Spare Hub.png" width="50" height="50" alt="Spare Hub Logo">
                <span style="color: white;">Spare Hub</span>
 
          </div>
        </div>

        <div class="card">
            <h1>Welcome to Spare Hub!
            <?php
//echo $_SESSION["username"];
echo $_SESSION["email"];

?>
            </h1>
            <p>Explore our wide range of two wheeler spare parts and accessories.</p>
        </div>

        <div class="categories">
            <div class="category-card">
                <img src="assets/honda.png" alt="Honda Logo">
                <h2>Honda</h2>
                <p>Find genuine spare parts for your Honda motorcycle.</p>
                <a href="honda.html"><button class="btn">Explore</button></a>
            </div>
            <div class="category-card">
                <img src="assets/yamaha.png" alt="Yamaha Logo">
                <h2>Yamaha</h2>
                <p>Get authentic spare parts for your Yamaha motorcycle.</p>
                <a href="yamaha.html"><button class="btn">Explore</button></a>
            </div>
            <div class="category-card">
                <img src="assets/ktm.png" alt="Suzuki Logo">
                <h2>KTM</h2>
                <p>Explore our collection of spare parts for your KTM motorcycle.</p>
                <button class="btn">Explore</button>
            </div>
            <div class="category-card">
                <img src="assets/royal.jpeg" alt="Hero Logo">
                <h2>Royal Enfield</h2>
                <p>Find genuine spare parts for your Royal Enfield motorcycle.</p>
                <button class="btn">Explore</button>
            </div>
            <div class="category-card">
                <img src="assets/tvs.png" alt="TVS Logo">
                <h2>TVS</h2>
                <p>Get authentic spare parts for your TVS motorcycle.</p>
                <button class="btn">Explore</button>
            </div>
        </div>
    </div>
</body>

</html>