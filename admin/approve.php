<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Approved List Dashboard</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
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


    .container {
        margin-left: 270px; /* Adjust margin to create space for the sidebar */
        padding: 20px; /* Padding for the container */
        background: white;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        flex: 1;
        padding-right: 50px; /* Right padding */
        padding-left: 20px; /* Left padding */
    }

    h1 {
        text-align: center;
        color: #e97807;
    }

    .section {
        margin-bottom: 20px;
        padding-left:20px;
    }

    h2 {
        color: #0a38c1;
    }
    

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 10px;
    }

    th, td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
    }

    tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    tr:hover {
        background-color: #f1f1f1;
    }
    .admin-title {
        display: flex; /* Use flexbox for alignment */
        align-items: center; /* Center items vertically */
    }
    
    .admin-title img {
        margin-right: 10px; /* Space between logo and text */
    }
</style>
<body>
    <div class="sidebar">
        <h3 class="admin-title">
            <img src="assets/Spare Hub.png" width="50" height="50" alt="Spare Hub Logo">
            Admin
        </h3>
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
    
    <div class="container">
        <h1>APPROVED LIST</h1>
        <div class="section">
            <h2>APPROVED SHOPPERS</h2>
            <table>
                <thead>
                    <tr>
                        <th>name</th>
                        <th>UserName</th>
                        <th>Phone Number</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                   <?php
        $con = mysqli_connect("localhost", "root", "", "sparehub");

                   $query="select * from reg_user where user_type='user' and status='ok'";
                   $result = mysqli_query($con, $query) or die("Couldn't connect to server: " . mysqli_error($con));
                   while($row=mysqli_fetch_array($result))
{
echo"<tr>";
echo"<td>".$row['name']."</td>"."<td>".$row['username']."</td>"."<td>".$row['phno']."</td>"."<td>".$row['email']."</td>.</tr>";

}
                   ?>
                   
                </tbody>
            </table>
        </div>

        <div class="section">
            <h2>APPROVED DELIVERY AGENTS</h2>
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>UserName</th>
                        <th>Phone Number</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                <?php
        $con = mysqli_connect("localhost", "root", "", "sparehub");

                   $query="select * from reg_user where user_type='deliveryag' and status='ok'";
                   $result = mysqli_query($con, $query) or die("Couldn't connect to server: " . mysqli_error($con));
                   while($row=mysqli_fetch_array($result))
{
echo"<tr>";
echo"<td>".$row['name']."</td>"."<td>".$row['username']."</td>"."<td>".$row['phno']."</td>"."<td>".$row['email']."</td>.</tr>";

}
                   ?>
                  
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
