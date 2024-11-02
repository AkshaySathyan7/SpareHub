<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopper Complaint Dashboard</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="shopstyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #5882ac, #d9e6f2);
            display: flex;
        }
        
        .sidebar {
            background-color: #2196f3;
            color: #fff;
            width: 250px; /* Fixed width for sidebar */
            padding: 20px;
            height: 100vh; /* Full height */
            display: flex;
            flex-direction: column;
        }

        .sidebar h2 {
            margin: 0 0 20px;
            text-align: center;
        }

        .sidebar a {
            color: #fff;
            text-decoration: none;
            margin: 15px 0;
            font-size: 18px;
            display: flex;
            align-items: center;
            transition: color 0.3s ease;
        }

        .sidebar a:hover {
            color: #ff9800;
        }

        .sidebar i {
            margin-right: 10px;
        }

        .container {
            flex: 1; /* Allow the container to fill remaining space */
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        .complaint-dashboard {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }
        
        .complaint-dashboard:hover {
            transform: scale(1.02);
        }
        
        h2 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 28px;
            color:white;
            font-weight: bold;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #555;
        }
        
        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 12px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 8px;
            outline: none;
            transition: border-color 0.3s, box-shadow 0.3s;
        }
        
        .form-group input:focus,
        .form-group textarea:focus {
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }
        
        .form-actions {
            display: flex;
            justify-content: center; /* Center the button */
        }
        
        .form-actions button {
            width: 100%;
            padding: 12px;
            font-size: 16px;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.3s;
        }
        
        .form-actions button[type="submit"] {
            background-color: #0f51cb; 
        }
        
        .form-actions button[type="submit"]:hover {
            background-color: #218838;
            transform: translateY(-2px);
        }
        
        .form-actions button[type="reset"] {
            background-color: #6c757d; 
        }
        
        .form-actions button[type="reset"]:hover {
            background-color: #5a6268;
            transform: translateY(-2px);
        }

        .s1 {
            color: orange;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h2>Spare Hub</h2>
        <a href="shopdash.php" class="fade-in"><i class="fas fa-home"></i> Home</a>
        <a href="profile.php" class="fade-in"><i class="fas fa-list"></i> Profile</a>
        <a href="add.php" class="fade-in"><i class="fas fa-shopping-cart"></i> Add-product</a>
        <a href="order_list.php" class="fade-in"><i class="fas fa-file-alt"></i> Orders</a>
        <a href="complaint.php" class="fade-in"><i class="fa-solid fa-trash"></i> Complaints</a>
        <a href="logout.php" class="fade-in"><i class="fas fa-sign-out-alt"></i> Logout</a>
    </div>
    
    <div class="container">
        <div class="complaint-dashboard">
            <h2 class="s1">SHOPPER SOLUTION AREA</h2>
            <form action="#" method="POST">
                <div class="form-group">
                    <input type="text" id="shopper-name" name="shopper-name" required placeholder="Enter your name">
                </div>
                <div class="form-group">
                    <input type="email" id="shopper-email" name="shopper-email" required placeholder="Enter Customer email">
                </div>
                <div class="form-group">
                    <label for="solution">Proposed Solution</label>
                    <textarea id="solution" name="solution" rows="4" placeholder="Write your proposed solution..."></textarea>
                </div>
                <div class="form-actions">
                    <button type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
