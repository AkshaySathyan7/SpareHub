<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Dashboard</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="shopstyle.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #d8dadf;
            margin: 0;
            display: flex; /* Use flexbox layout */
        }

        .sidebar {
            background-color: #2196f3;
            color: #fff;
            width: 250px;
            padding: 20px;
            display: flex;
            flex-direction: column;
            height: 100vh; /* Full height */
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
            flex: 1; /* Allow container to fill remaining space */
            max-width: 1000px;
            margin: 20px; /* Space around the container */
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #5b4caf;
            color: white;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        .s1 {
            color: orange;
        }

        button {
            padding: 6px 12px;
            margin-right: 5px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
        }

        .approve {
            background-color: #4CAF50;
            color: white;
        }

        .pending {
            background-color: #f44336;
            color: white;
        }

        .approve:hover {
            background-color: #45a049;
        }

        .pending:hover {
            background-color: #e53935;
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
        <h1 class="s1">SOLUTION</h1>
        <table>
            <thead>
                <tr>
                    <th>Sl. No</th>
                    <th>Order ID</th>
                    <th>Name</th>
                    <th>Number of Products</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <h4>SOLVED</h4>
                        <h4>REJECTED</h4>
                    </td>
                </tr>
                <!-- Additional rows can be added here -->
            </tbody>
        </table>
    </div>
</body>
</html>
