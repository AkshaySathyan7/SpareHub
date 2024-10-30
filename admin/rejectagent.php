<?php
$username=$_GET["username"];
$con = mysqli_connect("localhost", "root", "", "sparehub");
$query="delete from reg_user where  username='$username'";
$result=mysqli_query($con,$query);
if($result)
{
    echo "<script>
    alert('$username Rejected!');
    window.location.href = 'manage_del.php';
    </script>";
}


?>