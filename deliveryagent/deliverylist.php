<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="shopstyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        /* General Body Styling */
        body {
            font-family: Arial, sans-serif;
            background-color: #6e88c0;
            margin: 0;
            display: flex; /* Flex layout for sidebar + content */
        }

        /* Sidebar Styling */
        .sidebar {
            background-color: #00796b; /* Teal */
            color: #fff;
            width: 250px;
            padding: 20px;
            display: flex;
            flex-direction: column;
            transition: background-color 0.3s ease;
            position: fixed;
            height: 100vh;
            top: 0;
            left: 0;
            z-index: 1000; /* Keeps sidebar on top */
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
            color: #ffcc80; /* Light orange */
        }

        .sidebar a::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: -5px;
            width: 100%;
            height: 2px;
            background: #ffcc80;
            transform: scaleX(0);
            transition: transform 0.3s ease;
        }

        .sidebar a:hover::after {
            transform: scaleX(1);
        }

        .sidebar i {
            margin-right: 10px;
        }

        /* Main Content Area */
        .container {
            flex: 1; /* Allow container to fill remaining space */
            margin-left: 279px; /* Adjust space for sidebar */
            padding: 20px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            min-height: 100vh; /* Ensure content fills at least the screen height */
        }

        h1 {
            text-align: center;
            color: #333;
            font-size: 24px;
        }

        /* Table Styling */
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
            background-color: #00796b; ;
            color: white;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        button {
            padding: 6px 12px;
            margin-right: 5px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
        }

        /* Custom Class for Heading */
        .s1 {
            color: orange;
        }

        /* Responsive design */
        @media screen and (max-width: 768px) {
            .sidebar {
                width: 200px;
                padding: 10px;
            }

            .container {
                margin-left: 220px; /* Adjust space for sidebar on small screens */
                padding: 15px;
            }

            h1 {
                font-size: 20px; /* Smaller heading on mobile */
            }
        }
    </style>
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <h2>Delivery Agent</h2>
        <a href="agentdash.php"><i class="fas fa-home"></i> Home</a>
        <a href="profile.php"><i class="fas fa-list"></i> Profile</a>
        <a href="deliverylist.php"><i class="fa-solid fa-truck"></i> Delivery List</a>
        
        <a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
    </div>
    <?php
    $ac=$_SESSION["email"];

        $con = mysqli_connect("localhost", "root", "", "sparehub");

$query = "select * from cart where status<>'Placed' and agent='$ac'";
$result = mysqli_query($con, $query) or die("Couldn't connect to server: " . mysqli_error($con));

        ?>
    <!-- Main Content Area -->
    <div class="container">
        <h1 class="s1">ORDER LIST</h1>
        <table>
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Item-Name</th>
                    <th>Shop-Name</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
           <?php    
            while($row=mysqli_fetch_array($result))
{
echo"<tr>";
echo"<td>".$row['id']."</td>"."<td>".$row['item']."</td>"."<td>".$row['shop']."</td>"."<td>".$row['status']."</td>.</tr>";

}
     ?>   
            </tbody>
        </table>
    </div>

</body>
</html>
