<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>Spare Hub - Delivery Agent Dashboard</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Open Sans', sans-serif;
        }

        body {
            background-color: #e0f7fa; /* Light cyan background */
            display: flex;
            height: 100vh;
        }

        .sidebar {
            background-color: #00796b; /* Teal */
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

        .header {
            background-color: #00796b;
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
            background-color: #e0f7fa;
            width: calc(100% - 250px);
        }

        .card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin: 20px 0;
        }

        h1 {
            margin-bottom: 20px;
            color: #00796b;
        }

        .delivery-info {
            display: flex;
            flex-direction: column;
        }

        .delivery-info label {
            margin: 10px 0 5px;
            color: #00796b;
        }

        .delivery-info input, .delivery-info select {
            padding: 10px;
            border: 1px solid #00796b;
            border-radius: 5px;
            margin-bottom: 15px;
        }

        .btn {
            background-color: #00796b;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #ffcc80;
        }
    </style>
</head>

<body>
    <div class="sidebar">
        <h2>Spare Hub - Delivery Agent</h2>
        <a href="dashboard.html" class="fade-in"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
        <a href="deliveries.html" class="fade-in"><i class="fas fa-truck"></i> Deliveries</a>
        <a href=" orders.html" class="fade-in"><i class="fas fa-file-alt"></i> Orders </a>
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
            <h1>Delivery Agent Dashboard</h1>
            <p>Manage your deliveries and track your shipments.</p>
        </div>

        <div class="delivery-info">
            <label for="order-id">Order ID:</label>
            <input type="text" id="order-id" value="ORD12345" readonly>

            <label for="customer-name">Customer Name:</label>
            <input type="text" id="customer-name" value="John Doe" readonly>

            <label for="delivery-status">Delivery Status:</label>
            <select id="delivery-status">
                <option value="on-the-way-to-pickup">On the way to pickup</option>
                <option value="picked-up">Picked up</option>
                <option value="on-the-way-to-deliver">On the way to deliver</option>
                <option value="delivered">Delivered</option>
            </select>

            <button class="btn" id="update-status-btn">Update Delivery Status</button>
        </div>
    </div>

    <script>
        const updateStatusBtn = document.getElementById('update-status-btn');
        updateStatusBtn.addEventListener('click', updateDeliveryStatus);

        function updateDeliveryStatus() {
            const deliveryStatusSelect = document.getElementById('delivery-status');
            const selectedStatus = deliveryStatusSelect.value;

            // Send a request to the server to update the delivery status
            // For demonstration purposes, we'll just log the selected status
            console.log(`Updating delivery status to: ${selectedStatus}`);
        }
    </script>
</body>

</html>