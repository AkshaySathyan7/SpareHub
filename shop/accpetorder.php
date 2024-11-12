<?php
session_start();
$id=$_GET["id"];
$con = mysqli_connect("localhost", "root", "", "sparehub");
$query="update cart set status='Accepted' where  id='$id'";
$result=mysqli_query($con,$query);
if($result)
{
    header("Location: order_list.php");
    exit(); 
}
?>