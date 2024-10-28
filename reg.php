<?php
$con = mysqli_connect("localhost", "root", "", "sparehub");

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connection successful<br>";
}

if(isset($_POST["reg"]))
{
$name = $_POST["name"];
$username = $_POST["username"];
$email = $_POST["email"];
$phno = $_POST["phno"];
$address=$_POST["address"];
$pin = $_POST["pin"];
$role = $_POST["role"];
$password = $_POST["password"];
$status='pending';
// Establishing connection to the database

// Insert into reg_user table
$query = "INSERT INTO reg_user (name, username, phno, email, address, pin_code, user_type, password,status) VALUES ('$name', '$username', '$phno', '$email', '$address', '$pin', '$role', '$password','pending')";
$us=$username;

if (mysqli_query($con, $query)){
    echo "Inserted into reg_user table successfully.<br>";
} else {
    header('Location :registration.html?er=' .mysqli_error($con).'');
    echo "Error inserting into reg_user table: " . mysqli_error($con) . "<br>";
}
if($role == 'user')
{
    $query1="update reg_user set status='ok' where username='$us'";
    if (mysqli_query($con, $query1)){
        echo "successfully.<br>";
    } else {
        echo " " . mysqli_error($con) . "<br>";
    }
}
// If role is 'user', insert additional data into user_user table
if ($role == 'user') {
    $vtype = $_POST["vehicle-type"];
    $vmodel = $_POST["company"];
    $model = "Vehicle";


    $query = "INSERT INTO user_user (veh_type, comp, model, username) VALUES ('$vtype', '$vmodel', '$model', '$username')";

    if (mysqli_query($con, $query)) {
        // Registration successful
        echo "<script>
            alert('Registration successful!');
            window.location.href = 'login1.html'; // Redirect to login page
        </script>";
    } else {
        // Error occurred
        $error_message = mysqli_error($con);
        echo "<script>
            alert('Error occurred: $error_message');
            window.history.back(); // Go back to the previous page
        </script>";
    }
}

if ($role == 'shop') {
    $shopname = $_POST["shopname"];
    $shopid = $_POST["shopid"];
    $query = "INSERT INTO user_shop (username, shop_names, shop_id) VALUES ('$username', '$shopname', '$shopid')";
    if (mysqli_query($con, $query)) {
        // Registration successful
        echo "<script>
            alert('Registration successful!');
            window.location.href = 'login1.html'; // Redirect to login page
        </script>";
    } else {
        // Error occurred
        $error_message = mysqli_error($con);
        echo "<script>
            alert('Error occurred: $error_message');
            window.history.back(); // Go back to the previous page
        </script>";
    }
}

if ($role == 'deliveryagent') {
    $vehno = $_POST["vehicle-number"];
    $dl = $_POST["driving-license"];

    $query = "INSERT INTO user_agent (username, veh_num, dl_license) VALUES ('$username', '$vehno', '$dl')";

    if (mysqli_query($con, $query)) {
        // Registration successful
        echo "<script>
            alert('Registration successful!');
            window.location.href = 'login1.html'; // Redirect to login page
        </script>";
    } else {
        // Error occurred
        $error_message = mysqli_error($con);
        echo "<script>
            alert('Error occurred: $error_message');
            window.history.back(); // Go back to the previous page
        </script>";
    }
}
// Close the database connection
mysqli_close($con);
}
?>