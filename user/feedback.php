<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>User Complaint Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<style>
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }
    
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        color: #333;
        background-color: lightblue;
        display: flex;
        min-height: 100vh;
    }
    
    .container {
        display: flex;
        flex: 1;
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
    
    .rating-container {
        background:white;
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.2);
        max-width: 500px;
        margin: 50px auto; /* Center the rating container */
        color: white;
        height:500px;
    }
    
    h1 {
        text-align: center;
        margin-bottom: 20px;
        color:orange;
    }
    
    label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
    }
    
    input[type="text"], input[type="email"], textarea {
        width: 100%;
        padding: 12px;
        margin-bottom: 15px;
        border: none;
        border-radius: 5px;
        box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
    }
    
    input:focus, textarea:focus {
        outline: none;
        box-shadow: 0 0 5px rgba(110, 125, 255, 0.5);
    }
    
    .stars {
        display: flex;
        justify-content: space-between;
        margin-bottom: 15px;
    }
    
    .stars input {
        display: none;
    }
    
    .stars label {
        font-size: 30px;
        color: #ccc;
        cursor: pointer;
        transition: color 0.2s;
    }
    
    .stars input:checked ~ label {
        color: gold;
    }
    
    .stars label:hover,
    .stars label:hover ~ label {
        color: gold;
    }
    
    button {
        width: 30%;
        padding: 12px;
        background-color: #2865a7;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
        transition: background-color 0.3s;
    }
    .h1
    {
        color:orange;
    }
    
    button:hover {
        background-color: #218838;
    }
    
    button:focus {
        outline: none;
        box-shadow: 0 0 5px rgba(40, 167, 69, 0.5);
    }
    
</style>
<body>
    <div class="container">
        <div class="sidebar">
            <h2>Spare Hub <i class="fa-regular fa-user"></i></h2>
            <br>
            <a href="userdash.php"><i class="fas fa-home"></i> Home</a>
            <a href="edit-pass.php"><i class="fas fa-list"></i> Profile</a>
            <a href="complaint.php"><i class="fa-solid fa-comment"></i> Complaint</a>
            <a href="categories.html"><i class="fa-solid fa-pen"></i> Feedback</a>
            <a href="cart.html"><i class="fas fa-shopping-cart"></i> Cart</a>
            <a href="profile.html"><i class="fas fa-file-alt"></i> Orders</a>
            <a href="logout.html"><i class="fas fa-sign-out-alt"></i> Logout</a>
        </div>
        <div class="rating-container">
            <h1>We Value Your Review</h1>
            <form>
                <label for="name">Your Name</label>
                <input type="text" id="name" placeholder="Enter your name" required>

                <label for="email">Your Email</label>
                <input type="email" id="email" placeholder="Enter your email" required>

                <label for="email">Product name</label>
                <input type="email" id="email" placeholder="Enter your product name" required>

                <label for="rating">Rate Us</label>
                <div class="stars">
                    <input type="radio" name="rating" id="star1" value="5" required>
                    <label for="star1">★</label>
                    <input type="radio" name="rating" id="star2" value="4">
                    <label for="star2">★</label>
                    <input type="radio" name="rating" id="star3" value="3">
                    <label for="star3">★</label>
                    <input type="radio" name="rating" id="star4" value="2">
                    <label for="star4">★</label>
                    <input type="radio" name="rating" id="star5" value="1">
                    <label for="star5">★</label>
            </div>  
               <center> <button type="submit">Submit</button></center>
            </form>
        </div>
    </div>
</body>
</html>
