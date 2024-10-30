<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Dashboard</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            background-color: #c1d1ea;
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
            display: flex;
            flex-direction: column;
            padding: 30px;
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            flex-grow: 1; /* Allow dashboard to take the remaining space */
            margin-left: 270px; /* Space between sidebar and dashboard */
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        h1 {
            font-size: 24px;
            color: #333;
            text-align: center;
            flex-grow: 1;
        }

        .search-container {
            margin-bottom: 20px;
        }

        .search-input {
            width: 10%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            transition: border-color 0.3s;
        }

        .search-input:focus {
            border-color: #c2cedb;
            outline: none;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            border-radius: 10px;
            overflow: hidden;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #5fabfb;
            color: white;
            font-weight: bold;
        }

        tr:hover {
            background-color: #f1f1f1;
        }
        .button {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-right: 10px; /* Space between buttons */
        }

        /* Responsive Design */
        @media (max-width: 600px) {
            .search-input {
                width: 100%;
            }

            table {
                font-size: 14px;
            }
        }

        .a1 {
            color: orange;
            font-size: 35px;
            text-align: center;
            flex-grow: 1;
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
            <a href="dashboard.php"><img src ="assets/Spare Hub.png" width="50" height="50" alt="Spare Hub Logo"></a>
            Admin
        </h2>
        <a href="./dashboard.php" class="fade-in"><i class="fas fa-home"></i> Home</a>
        <a href="manage_customer.php" class="fade-in"><i class="fas fa-users"></i> Manage Customers</a>
        <a href="manage_shop.php" class="fade-in"><i class="fas fa-store"></i> Manage Shop</a>
        <a href="manage_del.php" class="fade-in"><i class="fas fa-truck"></i> Manage Delivery Agents</a>
        <a href="approve.php" class="fade-in"><i class="fas fa-users"></i></i> Approved users</a>
        <a href="verify_complaint.php" class="fade-in"><i class="fas fa-file-alt"></i> Verify Complaints</a>
        <a href="admin.php" class="fade-in"><i class="fa-solid fa-user-tie"></i>New Admin</a>
        <a href="logout.php" class="fade-in"><i class="fas fa-sign-out-alt"></i> Logout</a>
    </div>

    <div class="dashboard">
        <div class="header">
            <h1 class="a1">REGISTERED DELIVERY AGENT</h1>
        </div>

        <div class="search-container">
            <input type="text" class="search-input" placeholder="Search">
        </div>

        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Vehicle Number</th>
                    <th>Phone Number</th>
                    <th>Approve/reject</th>

                </tr>
            </thead>
            <tbody>

                 <?php
                $con = mysqli_connect("localhost", "root", "", "sparehub");

                      $query="select * from reg_user where  user_type='deliveryag' and status='pending'";
                      $result = mysqli_query($con, $query) or die("Couldn't connect to server: " . mysqli_error($con));
                      ?>
                <tr>

                <?php
while($row=mysqli_fetch_array($result))
{
echo"<tr>";
echo"<td>".$row['name']."</td>"."<td>".$row['username']."</td>"."<td>".$row['email']."</td>"."<td>".$row['address']."</td>"."<td>".$row['phno']."</td>"."<td>";?>
<a href="approveagent.php?username=<?php echo $row['username'];?>">
<button class="button" style="background-color: #28a745;">Approval</button>
</a>
<a href="rejectagent.php?username=<?php echo $row['username'];?>">
<button class="button" style="background-color: #ac1515;">Reject</button>
</a>
<?php
}

echo "</tr>";


         ?>     
                
                <!-- Add more rows as needed -->
            </tbody>
        </table>
    </div>
</body>
</html>
