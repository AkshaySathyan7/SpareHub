<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="shopstyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(to right, #6a11cb, #2575fc);
            display: flex;
            margin: 0;
            color: #333;
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
            background-color: #fff;
            border-radius: 15px;
            padding: 40px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            width: 30%;
            max-width: 900px;
            transition: transform 0.3s ease;
            padding-right:20px;
            margin-left:70px;
            margin-top:50px;
            height:500px;
        
        }

        .container:hover {
            transform: translateY(-5px);
        }

        h1.a1 {
            text-align: center;
            margin-bottom: 30px;
            font-size: 2.2em;
            color: #444;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        form {
            display: flex;
            justify-content: space-between;
        }

        .form-section {
            width: 48%;
            display: flex;
            flex-direction: column;
        }

        input {
            margin: 12px 0;
            padding: 12px;
            border: 2px solid #ddd;
            border-radius: 8px;
            font-size: 16px;
            transition: border-color 0.3s, box-shadow 0.3s;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        input:focus {
            border-color: #007bff;
            box-shadow: 0 0 8px rgba(0, 123, 255, 0.4);
            outline: none;
        }

        button {
            padding: 15px;
            border: none;
            border-radius: 8px;
            background-color: #007bff;
            color: white;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.3s;
            width: 30%;
            margin-top: 20px;
            font-weight: bold;
            align-items: center;
        }

        button:hover {
            background-color: #0056b3;
            transform: translateY(-2px);
        }

        @media (max-width: 768px) {
            .container {
                width: 90%;
            }
            form {
                flex-direction: column;
            }
            .form-section {
                width: 100%;
            }
        }

        .a1 {
            color: yellow;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h2>Spare Hub<i class="fa-regular fa-user"></i></h2>
        <a href="shopdash.php" class="fade-in"><i class="fas fa-home"></i> Home</a>
        <a href="profile.php" class="fade-in"><i class="fas fa-list"></i> Profile</a>
        <a href="add.php" class="fade-in"><i class="fas fa-shopping-cart"></i> Add-product</a>
        <a href="order_list.php" class="fade-in"><i class="fas fa-file-alt"></i> Orders</a>
        <a href="complaint.php" class="fade-in"><i class="fa-solid fa-trash"></i> Complaints</a>
        <a href="logout.php" class="fade-in"><i class="fas fa-sign-out-alt"></i> Logout</a>
    </div>

    <div class="container">
        <h1 class="a1">Add Spare Parts</h1>
        <form id="partsForm">
            <div class="form-section">
                <input type="text" id="partName" placeholder="Part Name" required>
                <input type="text" id="partType" placeholder="Part Type" required>
                <input type="text" id="partNumber" placeholder="Part Number" required>
                <input type="number" id="war" placeholder="Warranty (years)" required>
            </div>
            <div class="form-section">
                <input type="number" id="partPrice" placeholder="Price" required>
                <input type="text" id="company" placeholder="Company" required>
                <input type="text" id="brand" placeholder="Brand" required>
                <input type="text" id="year" placeholder="Year of Manufacturing" required>
            </div>
        </form>
        <center><button type="submit" form="partsForm">Add Spare Part</button></center>
    </div>
</body>
</html>
