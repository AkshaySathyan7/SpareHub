<?php
session_start();
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Spare Hub - Two Wheeler Spare Parts</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Open Sans', sans-serif;
        }

        body {
            background-color: #f9f9f9;
            display: flex;
            height: 100vh;
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
            color: #f1c40f;
        }

        .header {
            background-color: #3498db;
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
            background-color: #f9f9f9;
            width: calc(100% - 250px);
        }

        .card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin: 20px 0;
            transition: transform 0.3s ease;
        }

        h1 {
            margin-bottom: 20px;
            color: #3498db;
        }

        .vehicle-form {
            margin-top: 20px;
        }

        .vehicle-form div {
            margin-bottom: 15px;
        }

        .vehicle-form label {
            display: block;
            margin-bottom: 5px;
        }

        .vehicle-form select {
            width: 70%; /* Reduced width */
            padding: 5px; /* Reduced padding */
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .btn {
            background-color: #3498db;
            color: white;
            border: none;
            padding: 10px 15px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #2980b9;
        }

        .vehicle-list {
            margin-top: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
        }

        .vehicle-list h2 {
            margin-bottom: 10px;
        }

        .vehicle-list ul {
            list-style-type: none;
            padding: 0;
        }

        .vehicle-list li {
            background-color: #eaeaea;
            padding: 10px;
            margin: 5px 0;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <div class="sidebar">
        <h2>Spare Hub<i class="fa-regular fa-user"></i></h2>
        <a href="userdash.php" class="fade-in"><i class="fas fa-home"></i> Home</a>
        <a href="edit-pass.php" class="fade-in"><i class="fas fa-list"></i> Profile</a>
        <a href="complaint.php" class="fade-in"><i class="fa-solid fa-comment"></i> Complaint</a>
        <a href="feedback.php" class="fade-in"><i class="fa-solid fa-pen"></i> Feedback</a>
        <a href="cart.html" class="fade-in"><i class="fas fa-shopping-cart"></i> Cart</a>
        <a href="profile.html" class="fade-in"><i class="fas fa-file-alt"></i> Orders</a>
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
            <h1>Add Your Vehicle Here
            <?php
          //  echo $_SESSION["email"];
            ?>
            </h1>
            <p>Explore our wide range of two wheeler spare parts and accessories.</p>
            
            <form id="vehicleForm" action="userownveh.php" method="POST"  class="vehicle-form">
                <div>
                    <label for="vehicleCompany">Vehicle Company:</label>
                    <select id="vehicleCompany" name="vehicleCompany" required onchange="updateVehicleTypes()">
                        <option value="" disabled selected>Select Vehicle Company</option>
                        <option value="Honda">Honda</option>
                        <option value="Bajaj">Bajaj</option>
                        <option value="TVS">TVS</option>
                        <option value="Hero">Hero</option>
                        <option value="Yamaha">Yamaha</option>
                        <option value="KTM">KTM</option>
                        <option value="Royal Enfield">Royal Enfield</option>
                    </select>
                </div>
                <div>
                    <label for="vehicleType">Vehicle Type:</label>
                    <select id="vehicleType" name="vehicleType" required>
                        <option value="" disabled selected>Select Vehicle Type</option>
                    </select>
                </div>
                <div>
                    <label for="vehicleModel">Vehicle Model Year:</label>
                    <select id="vehicleModel" name="vehicleModel" required>
                        <option value="" disabled selected>Select Model Year</option>
                        <option value="2000">2000</option>
                        <option value="2001">2001</option>
                        <option value="2002">2002</option>
                        <option value="2003">2003</option>
                        <option value="2004">2004</option>
                        <option value="2005">2005</option>
                        <option value="2006">2006</option>
                        <option value="2007">2007</option>
                        <option value="2008">2008</option>
                        <option value="2009">2009</option>
                        <option value="2010">2010</option>
                        <option value="2011">2011</option>
                        <option value="2012">2012</option>
                        <option value="2013">2013</option>
                        <option value="2014">2014</option>
                        <option value="2015">2015</option>
                        <option value="2016">2016</option>
                        <option value="2017">2017</option>
                        <option value="2018">2018</option>
                        <option value="2019">2019</option>
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>
                        <option value="2024">2024</option>
                    </select>
                </div>
                <input type="submit" value="Save Vehicle" name="reg">
                </form>


                <?php
                
                $ac=$_SESSION["email"];
$con = mysqli_connect("localhost", "root", "", "sparehub");
$query="select * from user_vehicle where username='$ac'";
$result = mysqli_query($con, $query) or die("Couldn't connect to server: " . mysqli_error($con));

                
                ?>
            <div class="vehicle-list">
    <h2>Saved Vehicles:</h2>
    <ul id="vehicleList">
    &nbsp&nbsp<li>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b>Vehicle Company</b> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    &nbsp&nbsp&nbsp&nbsp<b>Vehicle Name</b>
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  <b>Vehicle Model</b>
    </li><br>
        <?php
        while ($row = mysqli_fetch_array($result)) {
            ?><li><?php
            
           // echo "<li>";
            echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row['company'] . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
            echo $row['veh_type'] . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
            echo $row['model'];
           // echo "</li>"; // End the list item
           ?></li><?php
        }
        ?>
    </ul>
</div>

        </div>
    </div>

    <script>
        const vehicleTypes = {
            Honda: ["CBR 150", "CB Shine", "CB Unicorn", "SP 125", "CBR 250R", "XBlade"],
            Bajaj: ["Pulsar 150", "Discover", "Avenger", "Dominar 400", "CT 100", "V15"],
            TVS: ["Apache RTR", "Jupiter", "XL100", "Apache RR 310", "TVS Ntorq", "Star City"],
            Hero: ["Splendor Plus", "HF Deluxe", "Passion Pro", "Xtreme 200R", "Maestro Edge"],
            Yamaha: ["YZF R15", "Fascino", "FZ-S", "MT-15", "Saluto", "Ray ZR"],
            KTM: ["Duke 200", "RC 390", "Duke 390", "Adventure 390"],
            RoyalEnfield: ["Classic 350", "Bullet 350", "Himalayan", "Meteor 350", "Interceptor 650"]
        };

        function updateVehicleTypes() {
            const companySelect = document.getElementById('vehicleCompany');
            const typeSelect = document.getElementById('vehicleType');

            // Clear previous options
            typeSelect.innerHTML = '<option value="" disabled selected>Select Vehicle Type</option>';

            const company = companySelect.value;
            if (company && vehicleTypes[company]) {
                vehicleTypes[company].forEach(vehicle => {
                    const option = document.createElement('option');
                    option.value = vehicle;
                    option.textContent = vehicle;
                    typeSelect.appendChild(option);
                });
            }
        }

        document.getElementById('saveVehicleBtn').addEventListener('click', function() {
            const vehicleCompany = document.getElementById('vehicleCompany').value;
            const vehicleType = document.getElementById('vehicleType').value;
            const vehicleModel = document.getElementById('vehicleModel').value;

            if (vehicleCompany && vehicleType && vehicleModel) {
                const vehicleList = document.getElementById('vehicleList');
                const listItem = document.createElement('li');
                listItem.textContent = `Company: ${vehicleCompany}, Type: ${vehicleType}, Model Year: ${vehicleModel}`;
                vehicleList.appendChild(listItem);

                // Clear the input fields after saving
                document.getElementById('vehicleForm').reset();
                updateVehicleTypes(); // Reset types as well
            } else {
                alert('Please fill in all fields.');
            }
        });
    </script>
</body>

</html>
