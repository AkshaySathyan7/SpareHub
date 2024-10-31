<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Edit Profile Dashboard</title>
</head>
    <style>
       
        .edit-profile-dashboard {
            max-width: 600px;
            margin: auto;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-top:70px;
        }
        
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
            padding-bottom:5px;
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

        .sidebar i {
            margin-right: 10px;
        }
        
        h1 {
            text-align: center;
            color: #00838f;
            margin-bottom: 20px;
        }
        
        
        .upload-btn {
            background-color: #00838f;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
            transition: background 0.3s;
        }
        
        .upload-btn:hover {
            background-color: #005b5a;
        }
        
        .profile-form {
            display: flex;
            flex-direction: column;
          
        }
        
        .form-group {
            margin-bottom: 15px;
            
        }
        
        label {
            margin-bottom: 5px;
            font-weight: bold;
            color: #555;
        }
        
        input, textarea {
            width: 98%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            transition: border 0.3s;
        }
        
        input:focus, textarea:focus {
            border-color: #00838f;
        }
        
        textarea {
            resize: vertical;
        }
        
        .save-btn {
            background-color: #ffa726;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s;
            width:40%;

        }
        
        .save-btn:hover {
            background-color: #ff8c00;
        }
       
    </style>

    <body>
    <div class="sidebar">
        <h2>Spare Hub<i class="fa-regular fa-user"></i></i></h2>
        <br>
        <a href="userdash.php" class="fade-in"><i class="fas fa-home"></i> Home</a>
        <a href="edit-pass.php" class="fade-in"><i class="fas fa-list"></i>Profile</a>
        <a href="complaint.php" class="fade-in"><i class="fa-solid fa-comment"></i> Complaint</a>
        <a href="feedback.php" class="fade-in"><i class="fa-solid fa-pen"></i> Feedback</a>
        <a href="cart.html" class="fade-in"><i class="fas fa-shopping-cart"></i> Cart</a>
        <a href="profile.html" class="fade-in"><i class="fas fa-file-alt"></i> Orders</a>
        <a href="logout.html" class="fade-in"><i class="fas fa-sign-out-alt"></i> Logout</a>
    </div>

    
    <div class="edit-profile-dashboard">
        <h1>Edit Profile<br><?php
       // echo $_SESSION["email"];
        ?></h1>
        <div class="profile-card">
        <?php
      //  echo $_SESSION["email"];
        ?>
        
 <p>       <?php
//echo $_SESSION["username"];
//$ab=$_SESSION["username"];
$ac=$_SESSION["email"];
?></p>
        </div>
        <?php
        $con = mysqli_connect("localhost", "root", "", "sparehub");

$query = "select * from reg_user where username='$ac'";
$result = mysqli_query($con, $query) or die("Couldn't connect to server: " . mysqli_error($con));
$row=mysqli_fetch_array($result)

        ?>
        
        
         <form action="updatedetails.php" method="POST" class="profile-form">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" value="<?php echo  $row['name']; ?>" required>

            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" value="<?php echo  $row['email']; ?>" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="tel" name="phno" id="phone" value="<?php echo  $row['phno']; ?>" required>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <textarea id="address" name="address" required><?php echo  $row['address']; ?></textarea>
            </div>
          <center>  <button type="submit" name="upd" class="save-btn">Save Changes</button></center>
        </form>
    </div>
</body>
</html>
