<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Honda Spare Parts</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #eaeaea; /* Light gray background */
        }
        
        .header {
            background-color: #181717; /* Bright header color */
            padding: 20px;
            text-align: center;
            color: white;
        }
        
        .header img {
            max-width: 150px; /* Adjust logo size */
            margin-bottom: 10px; /* Spacing below the logo */
        }
        
        .header h1 {
            margin: 0;
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
            background-color: #ff9800; /* Slightly darker button color */
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
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2); /* Enhanced shadow */
            text-align: center;
            transition: transform 0.2s; /* Smooth scale effect */
        }

        .product-card:hover {
            transform: scale(1.05); /* Scale effect on hover */
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
            color: #ff5722; /* Price color */
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
        }
        .buy-button
        {
            background-color: #ffa726;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s;
        }
        .cart-button
        {
            background-color: #ffa726;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s;
            margin-top:20px;
        }

    </style>
</head>
<body>
    <header class="header">
        <img src="./assets/honda.png" alt="Honda Logo"> <!-- Honda logo -->
        <h1>Honda Spare Parts Store</h1>
        <div class="search-bar">
            <input type="text" placeholder="Search for spare parts...">
            <button type="submit">Search</button>
        </div>
    </header>
    
    <main>
        <section class="product-container">
            <div class="product-card">
                <img src="./assets/air-filter.webp" alt="Spare Part 1">
                <h3>Brake Pad Set</h3>
                <p>Compatible with Honda Activa</p>
                <div class="price">Rs 20000</div>
                <button class="buy-button">Buy Now</button>
                <button class="cart-button">Add to Cart</button>
            </div>
            <div class="product-card">
                <img src="./assets/honjpeg." alt="Spare Part 2">
                <h3>Air Filter</h3>
                <p>Compatible with Honda CBR</p>
                <div class="price">Rs 2000</div>
                <button class="buy-button">Buy Now</button>
                <button class="cart-button">Add to Cart</button>
            </div>
            
            </div>
            <div class="product-card">
                <img src="part3.jpg" alt="Spare Part 3">
                <h3>Oil Filter</h3>
                <p>Compatible with Honda Dio/p>
                <div class="price">Rs 2000</div>
                <button class="buy-button">Buy Now</button>
                <button class="cart-button">Add to Cart</button>
            </div>
            <div class="product-card">
                <img src="part4.jpg" alt="Spare Part 4">
                <h3>Battery</h3>
                <p>Compatible with all Honda models</p>
                <div class="price">Rs 20000</div>
                <button class="buy-button">Buy Now</button>
                <button class="cart-button">Add to Cart</button>
            </div>
            <!-- Add more products as needed -->
        </section>
    </main>

    <footer class="footer">
        <p>&copy; 2024 Honda Spare Parts Store</p>
    </footer>
</body>
</html>