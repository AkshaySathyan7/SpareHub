<?php
$con = mysqli_connect("localhost", "root", "", "sparehub");

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connection successful<br>";
}

if(isset($_POST["reg"]))
{
$partname = $_POST["partname"];
$type = $_POST["type"];
$partnumber = $_POST["partnumber"];
$war = $_POST["war"];
$comp=$_POST["comp"];
$price = $_POST["price"];
$company = $_POST["company"];
$vehmodel = $_POST["vehmodel"];
$brand= $_POST["brand"];
$year= $_POST["year"];
// Establishing connection to the database

// Insert into reg_user table
$query = "INSERT INTO spare_parts VALUES ('$partname', '$price', '$type', '$company', '$partnumber', '$vehmodel', '$war', '$brand', '$comp','$year')";

if (mysqli_query($con, $query)) {
    // Registration successful
    echo "<script>
        alert('Parts Entered successfully!');
        window.location.href = 'add.php'; // Redirect to login page
    </script>";
} else {
    // Error occurred
    $error_message = mysqli_error($con);
    echo "<script>
        alert('Error occurred: $error_message');
        window.history.back(); // Go back to the previous page
    </script>";
}
// If role is 'user', insert additional data into user_user table




// Close the database connection
mysqli_close($con);
}
?>