<?php
session_start();
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Admin Dashboard</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Montserrat', sans-serif;
    }

    body {
        background-color: #f4f4f4;
        display: flex;
        height: 100vh;
    }

    .sidebar {
        background-color: #4a148c;
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

    .header {
        background-color: #4a148c;
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
        background-color: #f4f4f4; /* Ensures it matches the body background */
        width: calc(100% - 250px); /* Adjust for sidebar width */
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
        color: #4a148c;
    }

    .statistics {
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
        color:black;
    }

    .stat-card {
        background-color: #ffcc80;
        border-radius: 10px;
        padding: 20px;
        margin: 10px;
        flex: 1 1 30%;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
    }

    .stat-card:hover {
        transform: scale(1.05);
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }

    .fade-in {
        animation: fadeIn 0.5s ease forwards;
    }
    .dropdown {
    position: relative;
    display: inline-block;
}

.dropbtn {
    background-color: #4CAF50; /* Green */
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {
    background-color: #f1f1f1;
}
</style>
<body>
    <div class="sidebar">
        <h2>Admin</h2>
        <a href="dashboard.php" class="fade-in"><i class="fas fa-home"></i>Home</a>
        <div class="dropdown">
        <a href="#" class="fade-in"><i class="fas fa-users"></i>User-Mangement</a>
     <div class="dropdown-content">
        <a href="manage_customer.php" class="fade-in"><i class="fas fa-users"></i> Manage Customers</a>
        <a href="manage_shop.php" class="fade-in"><i class="fas fa-users"></i> Manage Shop</a>
        <a href="manage_del.php" class="fade-in"><i class="fas fa-users"></i> Manage Delivery-Agent</a>
    </div>
</div>
    <a href="approve.php" class="fade-in"><i class="fas fa-users"></i></i> Approved users</a>
    <a href="pending.php" class="fade-in"><i class="fas fa-file-alt"></i> Pending Approval</a>
     <a href="verify_complaint.php" class="fade-in"><i class="fas fa-file-alt"></i> Verify Complaint</a>
        <a href="admin.php" class="fade-in"><i class="fa-solid fa-user-tie"></i>New Admin</a>
        <a href="logout.php" class="fade-in"><i class="fas fa-sign-out-alt"></i> Logout</a>
    </div>

    <div class="main-content">
        <div class="header">
            <div class="logo">
                <img src="assets/Spare Hub.png" width="50" height="50" alt="Spare Hub Logo">
                <span style="color: white;">Admin Panel</span>
            </div>
        </div>

        <div class="card">
            <h1>Welcome, Admin!</h1>
            <p>Here you can manage users, Verify complaint, and update settings.</p>
        </div>

        <div class="statistics">
        <div class="stat-card">
    <a href="user_list.php">
        <h2><i class="fas fa-users"></i> User-list</h2>
        <p></p>
    </a>
</div>

            <div class="stat-card">
            <a href="complaint_list.php">
                <h2><i class="fas fa-file-alt"></i>Complaint-list</h2>
                <p></p>
            </a>
</a>
        
        </div>
    </div>
</body>

</html>
