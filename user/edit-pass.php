<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Edit Profile Dashboard</title>
</head>
<body>
    <style>
        * {
            box-sizing: border-box;
        }
        
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        
        .edit-profile-dashboard {
            max-width: 600px;
            margin: auto;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }
        
        h1 {
            text-align: center;
            color: #00838f;
            margin-bottom: 20px;
        }
        
        .profile-card {
            text-align: center;
            margin-bottom: 20px;
        }
        
        .profile-pic {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            border: 2px solid #00838f;
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
            width: 100%;
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
        }
        
        .save-btn:hover {
            background-color: #ff8c00;
        }
        
    </style>
    <div class="edit-profile-dashboard">
        <h1>Edit Profile</h1>
        <div class="profile-card">
            <img src="profile-pic.png" alt="Profile Picture" class="profile-pic"><br>
            <button class="upload-btn">Change Profile Picture</button>
 <p>       <?php
//echo $_SESSION["username"];
echo $_SESSION["email"];
//$ab=$_SESSION["username"];
$ac=$_SESSION["email"];
?></p>
        </div>
        <?php
        $con = mysqli_connect("localhost", "root", "", "sparehub");

$query = "select * from reg_user where username='$ac';";
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
            <button type="submit" name="upd" class="save-btn">Save Changes</button>
        </form>
    </div>
</body>
</html>
