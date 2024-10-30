<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #e9ecef;
            margin: 0;
            display: flex; /* Use flexbox for layout */
            height: 100vh; /* Full height for the body */
        }

        .sidebar {
            background-color: #4a148c;
            color: #fff;
            width: 250px;
            padding: 20px;
            display: flex;
            flex-direction: column;
            height: 100vh; /* Full height */
            position: fixed; /* Fix the sidebar */
        }

        .sidebar h2 {
            margin: 0;
            margin-bottom: 20px;
            text-align: center;
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
            color: #ff6600;
        }

        .sidebar a::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: -5px;
            width: 100%;
            height: 2px;
            background: #ff6600;
            transform: scaleX(0);
            transition: transform 0.3s ease;
        }

        .sidebar a:hover::after {
            transform: scaleX(1);
        }

        .sidebar i {
            margin-right: 10px;
        }

        .dashboard {
            margin-left: 250px; /* Space for the sidebar */
            padding-left: 50px;
            padding-right:20px;
            width: calc(100% - 250px); /* Adjust width to fill remaining space */
            background: #ffffff;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            overflow-y: auto; /* Enable scrolling if content overflows */
        }

        header {
            text-align: center;
            margin-bottom: 30px;
        }

        h1 {
            color: #007bff;
            font-size: 2.5em;
            margin: 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 15px;
            text-align: left;
        }

        th {
            background-color: #007bff;
            color: white;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        .status {
            font-weight: bold;
            text-align: center;
        }

        .status.pending {
            color: #ffc107; /* Bootstrap warning color */
        }
        .admin-title {
            display: flex; /* Use flexbox for alignment */
            align-items: center; /* Center items vertically */
        }
        
        .admin-title img {
            margin-right: 10px; /* Space between logo and text */
        }
        .s1
        {
            padding-top:30px;
            padding-bottom:20px;
        }
        
    </style>
</head>
<body>
    <div class="sidebar">
        <h2 class="admin-title">
            <img src="assets/Spare Hub.png" width="50" height="50" alt="Spare Hub Logo">
            Admin
        </h2>
        
        <a href="./dashboard.php" class="fade-in"><i class="fas fa-home"></i> Home</a>
        <a href="manage_customer.php" class="fade-in"><i class="fas fa-users"></i> Manage Customers</a>
        <a href="manage_shop.php" class="fade-in"><i class="fas fa-store"></i> Manage Shop</a>
        <a href="manage_del.php" class="fade-in"><i class="fas fa-truck"></i> Manage Delivery Agents</a>
        <a href="approve.php" class="fade-in"><i class="fas fa-users"></i></i> Approved users</a>
        <a href="pending.php" class="fade-in"><i class="fas fa-file-alt"></i> Pending Approval</a>
        <a href="verify_complaint.php" class="fade-in"><i class="fas fa-file-alt"></i> Verify Complaints</a>
        <a href="admin.php" class="fade-in"><i class="fa-solid fa-user-tie"></i>New Admin</a>
        <a href="logout.html" class="fade-in"><i class="fas fa-sign-out-alt"></i> Logout</a>a>
    </div>
    <div class="dashboard">
        <header>
            <h1 class="s1">COMPLAINT-LIST</h1>
        </header>
        <main>
            <table>
                <thead>
                    <tr>
                        <th>User-id</th>
                        <th>Name</th>
                        <th>Complaint</th>
                        <th>User-type</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="status pending"></td>
                    </tr>
                    <!-- Additional rows can be added here -->
                </tbody>
            </table>
        </main>
    </div>
</body>
</html>
