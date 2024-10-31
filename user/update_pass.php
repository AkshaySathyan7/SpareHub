<?php
session_start();
$ac=$_SESSION["email"];
$con = mysqli_connect("localhost", "root", "", "sparehub");

if(isset($_POST["upd"]))
{
$password = $_POST["password"];
$currentpass = $_POST["new-password"];
$conpass=$_POST["confirm-password"];
$query = "update reg_user set name='$name', phno='$phno', email='$email', address='$address' where username='$ac'";

if (mysqli_query($con, $query)){
    echo "<script>
    alert('Successfully Updated');
    window.location.href = 'userdash.php'; // Redirect to login page
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