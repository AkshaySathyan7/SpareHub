<?php
session_start();
$ac=$_SESSION["email"];
$con = mysqli_connect("localhost", "root", "", "sparehub");

if(isset($_POST["upd"]))
{
$dl = $_POST["name"];
$num = $_POST["email"];

$query = "update user_agent set veh_num='$num', dl_license='$dl' where username='$ac'";

if (mysqli_query($con, $query)){
    echo "<script>
    alert('Successfully Updated');
    window.location.href = 'agentdash.php'; // Redirect to login page
</script>";
}
 else {
    $error_message = mysqli_error($con);
    echo "<script>
        alert('Error occurred: $error_message');
        window.history.back(); // Go back to the previous page
    </script>";
}

mysqli_close($con);
}
?>