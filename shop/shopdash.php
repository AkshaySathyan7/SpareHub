<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Spare Hub - User Dashboard</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Open Sans', sans-serif;
        }

        body {
            background-color: #f7f7f7;
            display: flex;
            height: 100vh;
        }

        .sidebar {
            background-color: #2196f3;
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
            color: #ff9800;
        }

        .sidebar a::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: -5px;
            width: 100%;
            height: 2px;
            background: #ff9800;
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
            background-color: #2196f3;
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
            background-color: #f7f7f7;
            width: calc(100% - 250px);
        }

        .card {
            background-color: skyblue;
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
            color: #2196f3;
        }

        .dashboard {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .dashboard-card {
            background-color: #e7e7e7;
            border-radius: 10px;
            padding: 20px;
            margin: 10px;
            flex: 1 1 30%;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .dashboard-card:hover {
            transform: scale(1.05);
        }

        .dashboard-card h2 {
            margin-top: 10px;
            color: #2196f3;
        }

        .dashboard-card p {
            color: #666;
        }

        .dashboard-card .btn {
            background-color: #2196f3;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .dashboard-card .btn:hover {
            background-color: #ff9800;
        }

        /* Add gradient to the top left and right corners */
        .main-content::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 200px ;
            height: 100px;
            background: linear-gradient(to bottom right, #34A853, #FFC107);
            z-index: -1;
        }

        .main-content::after {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 200px;
            height: 100px;
            background: linear-gradient(to bottom left, #FF69B4, #3B3F4E);
            z-index: -1;
        }
    </style>
</head>

<body>
    <div class="sidebar">
        <h2>Spare Hub</h2>
        <a href="shopdash.php" class="fade-in"><i class="fas fa-home"></i> Home</a>
        <a href="profile.html" class="fade-in"><i class="fas fa-list"></i>Profile</a>
        <a href="add.html" class="fade-in"><i class="fas fa-shopping-cart"></i>Add-product</a>
        <a href="order_list.html" class="fade-in"><i class="fas fa-file-alt"></i> Orders</a>
        <a href="complaint.html" class="fade-in"><i class="fa-solid fa-trash"></i> Complaints</a>
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
            <h1>Welcome to Sparehub</h1>
            <p>Manage your orders, track your shipments, and more.</p>
        </div>

        <div class="dashboard">
            <div class="dashboard-card">
                <h2>Orders</h2>
                <p>View and manage your orders.</p>
                <a href="order_list.html"> <button class="btn">Track Shipments</button></a>
            </div>
            <div class="dashboard-card">
                <h2>Shipments</h2>
                <p>No of items shiped.</p>
                <a href="ship.html"><button class="btn">Track Shipments</button></a>
            </div>
            <div class="dashboard-card">
                <h2>Complaints Received</h2>
                <p>Number of complaints received</p>
               <a href="complaint_list.html"> <button class="btn">View Complaint</button></a>
            </div>
            <div class="dashboard-card">
                <h2>Solutions</h2>
                <p>Number of Solutions Provided</p>
                <a href="solution.html"><button class="btn">View Solution</button></a>  
            </div>
            
        </div>
    </div>
</body>

</html>