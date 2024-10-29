<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            display: flex;
        }
        .sidebar {
            background-color: #4a148c;
            color: white;
            width: 250px;
            padding: 20px 20px 60px; /* Adjust bottom padding */
            display: flex;
            flex-direction: column;
            height: 100vh; /* Full height */
            position: fixed; /* Keep it fixed */
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
            transition: color 0.3s ease;
            display: flex;
            align-items: center;
            padding-bottom:10px;
        }

        .sidebar a:hover {
            color: #ff6600;
        }

        .sidebar i {
            margin-right: 10px;
        }

        .dashboard {
            flex-grow: 1;
            max-width: 600px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 100px; /* Add top margin for spacing */
            margin-left:450px;
           
        }

        h2 {
            margin-bottom: 20px;
        }

        .dashboard h1 {
            font-size: 24px;
            color: #333;
            text-align: center;
            margin-bottom: 30px; /* Space below the heading */
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input[type="text"], input[type="email"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            padding: 10px 15px;
            background-color:blue;
            border: none;
            color: white;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #4cae4c;
        }
        
        .admin-title {
            display: flex; /* Use flexbox for alignment */
            align-items: center; /* Center items vertically */
        }
        
        .admin-title img {
            margin-right: 10px; /* Space between logo and text */
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
        <a href="logout.html" class="fade-in"><i class="fas fa-sign-out-alt"></i> Logout</a>
    </div>

    <div class="dashboard">
        <h1><i class="fas fa-user-plus"></i> New Admin</h1>
        <form action="/add_admin" method="POST">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>

            <button type="submit">Add Admin</button>
        </form>
    </div>

</body>
</html>
