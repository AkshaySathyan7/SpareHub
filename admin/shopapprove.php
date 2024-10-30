<?php
$username=$_GET["username"];
$con = mysqli_connect("localhost", "root", "", "sparehub");
$query="update reg_user set status='ok' where  username='$username'";
$result=mysqli_query($con,$query);
if($result)
{
    echo "<script>
    alert('$username Approved!');
    window.location.href = 'manage_shop.php';
    </script>";
}


?>