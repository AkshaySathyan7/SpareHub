<?php
session_start();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>User Complaint Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<style>
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        color: #333;
        background-color: lightblue;
        display: flex;
        min-height: 100vh;
    }

    .sidebar {
        background-color: #3498db;
        color: #fff;
        width: 250px;
        padding: 20px;
        display: flex;
        flex-direction: column;
        transition: background-color 0.3s ease;
    }

    .sidebar h2 {
        margin-bottom: 30px;
        font-size: 24px;
    }

    .sidebar a {
        color: #fff;
        text-decoration: none;
        margin: 15px 0;
        font-size: 18px;
        position: relative;
        transition: color 0.3s ease;
    }

    .sidebar a:hover {
        color: #f1c40f;
    }

    .sidebar a::after {
        content: '';
        position: absolute;
        left: 0;
        bottom: -5px;
        width: 100%;
        height: 2px;
        background: #f1c40f;
        transform: scaleX(0);
        transition: transform 0.3s ease;
    }

    .sidebar a:hover::after {
        transform: scaleX(1);
    }

    .container {
        flex-grow: 1;
        max-width: 600px;
        margin: 50px auto;
        padding: 30px;
        background: white;
        border-radius: 12px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        transition: transform 0.2s;
    }

    .container:hover {
        transform: scale(1.02);
    }

    header {
        text-align: center;
        margin-bottom: 30px;
    }

    h1 {
        font-size: 28px;
        color: #5f665f;
        margin-bottom: 10px;
    }

    p {
        color: #666;
        font-size: 14px;
    }

    form {
        display: flex;
        flex-direction: column;
    }

    .form-group {
        margin-bottom: 20px;
    }

    label {
        margin-bottom: 5px;
        font-weight: bold;
    }

    input[type="text"],
    input[type="email"],
    textarea {
        width: 100%;
        padding: 12px;
        border: 2px solid #ddd;
        border-radius: 6px;
        font-size: 16px;
        transition: border-color 0.3s;
    }

    input[type="text"]:focus,
    input[type="email"]:focus,
    textarea:focus {
        border-color: #4CAF50;
        outline: none;
    }

    button {
        padding: 12px;
        background-color: blue;
        color: white;
        border: none;
        border-radius: 6px;
        font-size: 18px;
        cursor: pointer;
        transition: background-color 0.3s, transform 0.2s;
        width: 30%;
        align-self: center;
    }

    button:hover {
        background-color: darkblue;
        transform: translateY(-2px);
    }

    button:active {
        transform: translateY(0);
    }
</style>

<body>
    <div class="sidebar">
        <h2>Spare Hub <i class="fa-regular fa-user"></i></h2>
        <a href="userdash.php"><i class="fas fa-home"></i> Home</a>
        <a href="edit-pass.php"><i class="fas fa-list"></i> Profile</a>
        <a href="complaint.php"><i class="fa-solid fa-comment"></i> Complaint</a>
        <a href="feedback.php"><i class="fa-solid fa-pen"></i> Feedback</a>
        <a href="cart.php"><i class="fas fa-shopping-cart"></i> Cart</a>
        <a href="profile.php"><i class="fas fa-file-alt"></i> Orders</a>
        <a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
    </div>

    <div class="container">
        <header>
            <h1>Rating </h1>
            <p>Rate The Product</p>
        </header>

        <main>
        <form id="complaint-form" method="POST" action="rating.php">
            <div class="form-group">
                <select id="vehicleCompany" name="vehicleCompany" required onchange="updateVehicleDetails()">
                    <option value="" disabled selected>Select Order</option>
                    <?php
                    $ac = $_SESSION["email"];
                    $con = mysqli_connect("localhost", "root", "", "sparehub");
                    $query = "SELECT * FROM cart WHERE username='$ac'";
                    $result = mysqli_query($con, $query) or die("Couldn't connect to server: " . mysqli_error($con));

                    while ($row = mysqli_fetch_array($result)) {
                        echo "<option value='{$row['item']}' data-item-id='{$row['id']}'>{$row['item']}</option>";
                    }
                    ?>

                </select>
            </div>

            <!-- Hidden fields to hold the non-editable details -->
            <input type="hidden" id="itemPrice" name="itemprice">
            <input type="hidden" id="itemQuantity" name="itemquantity">
            <input type="hidden" id="itemDescription" name="itemdescription">

            <!-- Non-editable details displayed below -->
            <div id="item-details">
                <!-- Item details will be shown here -->
            </div>

        </form>
        </main>

    </div>

    <script>
    function updateVehicleDetails() {
        var itemName = document.getElementById("vehicleCompany").value;

        // Send AJAX request to fetch the item details based on the selected item
        var xhr = new XMLHttpRequest();
        xhr.open("GET", "ratingstar.php?item=" + encodeURIComponent(itemName), true);
        xhr.onload = function() {
            if (xhr.status == 200) {
                // Update the item details section with the response
                document.getElementById("item-details").innerHTML = xhr.responseText;

                // Also, set the hidden fields to pass data along with the form
                var itemDetails = JSON.parse(xhr.responseText); // Assuming the response is in JSON format
                document.getElementById("itemPrice").value = itemDetails.price;
                document.getElementById("itemQuantity").value = itemDetails.quantity;
                document.getElementById("itemDescription").value = itemDetails.description;

            }
        };
        xhr.send();
    }
    </script>

</body>
</html>
