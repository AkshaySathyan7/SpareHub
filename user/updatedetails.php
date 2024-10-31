<?php
session_start();
$ac=$_SESSION["email"];
$con = mysqli_connect("localhost", "root", "", "sparehub");

if(isset($_POST["upd"]))
{
$name = $_POST["name"];
$email = $_POST["email"];
$phno = $_POST["phno"];
$address=$_POST["address"];
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