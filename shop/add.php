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
            flex-wrap: wrap; /* Allow wrapping for smaller screens */
        }

        .form-section {
            width: 48%;
            display: flex;
            flex-direction: column;
        }

        input, select {
            margin: 12px 0;
            padding: 12px;
            border: 2px solid #ddd;
            border-radius: 8px;
            font-size: 16px;
            transition: border-color 0.3s, box-shadow 0.3s;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        input:focus, select:focus {
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
        <form action="additem.php" method="POST" id="partsForm">
            <div class="form-section">
                <input type="text" id="partName" placeholder="Part Name" name="partname" required>
                <select name="type" id="partType" required>
                    <option value="" disabled selected>Select Part Type</option>
                    <option value="Engine">Engine</option>
                    <option value="Brake">Brake</option>
                    <option value="Tire">Tire</option>
                    <option value="Battery">Battery</option>
                    <option value="Filter">Filter</option>
                    <option value="Clutch">Clutch</option>
                    <option value="Others">Others</option>

                </select>
                <input type="number" id="partNumber" name="partnumber" placeholder="Part Number" required>
                <input type="text" id="war" name="war" placeholder="Warranty (years)" required>
                <input type="text" id="comp" name="comp" placeholder="Enter Product Company" required>

            </div>
            <div class="form-section">
                <input type="number" id="partPrice" placeholder="Price" name="price" required>
                <select id="company" name="company" required>
                    <option value="" disabled selected>Select Company</option>
                    <option value="Honda">Honda</option>
                    <option value="Bajaj">Bajaj</option>
                    <option value="TVS">TVS</option>
                    <option value="Hero">Hero</option>
                    <option value="Suzuki">Suzuki</option>
                    <option value="Yamaha">Yamaha</option>
                    <option value="KTM">KTM</option>
                    <option value="RoyalEnfield">Royal Enfield</option>
                </select>
                <select id="model" name="vehmodel" required>
                    <option value="" disabled selected>Select Model</option>
                </select>
                <select id="brand" name="brand" required>
                    <option value="" disabled selected>Select Brand</option>
                    <option value="Original">Original</option>
                    <option value="Aftermarket">Aftermarket</option>
                
                </select>
                <input type="text" name="year" id="year" placeholder="Year of Manufacturing" required>
            </div>
        </form>
        <center><button type="submit" name="reg" form="partsForm">Add Spare Part</button></center>
    </div>

    <script>
        const companyModelMap = {
            Honda: ["CBR 150", "CB Shine", "CB Unicorn", "SP 125", "CBR 250R", "XBlade"],
            Bajaj: ["Pulsar 150", "Discover", "Avenger", "Dominar 400", "CT 100", "V15"],
            TVS: ["Apache RTR", "Jupiter", "XL100", "Apache RR 310", "TVS Ntorq", "Star City"],
            Hero: ["Splendor Plus", "HF Deluxe", "Passion Pro", "Xtreme 200R", "Maestro Edge"],
            Yamaha: ["YZF R15", "Fascino", "FZ-S", "MT-15", "Saluto", "Ray ZR"],
            KTM: ["Duke 200", "RC 390", "Duke 390", "Adventure 390"],
            RoyalEnfield: ["Classic 350", "Bullet 350", "Himalayan", "Meteor 350", "Interceptor 650"]
        };

        const companySelect = document.getElementById('company');
        const modelSelect = document.getElementById('model');

        companySelect.addEventListener('change', function() {
            const selectedCompany = this.value;
            const models = companyModelMap[selectedCompany] || [];
            
            // Clear existing options
            modelSelect.innerHTML = '<option value="" disabled selected>Select Model</option>';
            
            // Populate new options
            models.forEach(function(model) {
                const option = document.createElement('option');
                option.value = model;
                option.textContent = model;
                modelSelect.appendChild(option);
            });
        });
    </script>
</body>
</html>
