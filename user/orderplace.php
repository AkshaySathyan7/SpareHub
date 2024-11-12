<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "sparehub");
$user=$_SESSION["email"];
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connection successful<br>";
}


$query = "update cart set status='Placed' where status='Pending' and username='$user'";

if (mysqli_query($con, $query)){
    echo "<script>
    alert('Woohooo....Order Placed!!!!');
    window.location.href = 'userdash.php'; // Redirect to login page
</script>";} else {
    header('Location :registration.html?er=' .mysqli_error($con).'');
    echo "Error inserting into reg_user table: " . mysqli_error($con) . "<br>";
}
mysqli_close($con);

?>