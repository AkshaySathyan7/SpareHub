<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "sparehub");

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connection successful<br>";
}

if(isset($_POST["reg"]))
{
$comp = $_POST["vehicleCompany"];
$type = $_POST["vehicleType"];
$model = $_POST["vehicleModel"];
$ac=$_SESSION["email"];

// Establishing connection to the database

// Insert into reg_user table
$query = "INSERT INTO user_vehicle VALUES ('$ac', '$comp', '$type', '$model')";
if (mysqli_query($con, $query)){
    echo "<script>
    alert('Vehicle Enetred Successfully!');
    window.location.href = 'ownvehicle.php'; // Redirect to login page
</script>";} else {
    header('Location :registration.html?er=' .mysqli_error($con).'');
    echo "Error inserting into reg_user table: " . mysqli_error($con) . "<br>";
}


mysqli_close($con);
}
?>