<?php
session_start();
$email=$_POST["email"];
$password=$_POST["password"];
$con = mysqli_connect("localhost", "root", "", "sparehub");

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
} else {
	echo "<script>
	alert('Login Failed!');
	window.location.href = 'login1.html'; // Redirect to login page
</script>";}
$q="select * from reg_user where email='$email' or username='$email' and password='$password' and status='ok'";
$result=mysqli_query($con,$q);
if(mysqli_num_rows($result)>0)
{
	$_SESSION["email"]=$email;
	$row=mysqli_fetch_array($result);
	$r=$row["user_type"];
	if($r=="user")
	{

		
		header('location:user/userdash.php');
	}
	else if($r=="admin")
	{
		echo "<script>
            alert('Welcome Admin');
        </script>";
		header('location:admin/dashboard.php');
	}
    else if($r=="shop")
	{
		header('location:shop/shopdash.php');
	}
    else if($r=="deliveryag")
	{
		header('location:deliveryagent/agentdash.php');
	}
	else
	{
		echo"WRONG USERNAME OR PASSWORD<br>TRY AGAIN";
	}
}

mysqli_close($con)
?>