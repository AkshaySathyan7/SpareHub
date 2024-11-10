<?php
session_start();
$company=$_GET["company"];
$veh_type=$_GET["veh_type"];
$con = mysqli_connect("localhost", "root", "", "sparehub");

	//$_SESSION["email"]=$email;
	if($company=="Honda")
	{
		header('location:honda.php');
	}
	else if($company=="Bajaj")
	{
		header('location:bajaj.php');
	}
    else if($company=="TVS")
	{
		header('location:tvs.php');
	}
    else if($company=="Hero")
	{
		header('location:hero.php');
	}
    else if($company=="Yamaha")
	{
		header('location:yamaha.php');
	}
    else if($company=="KTM")
	{
		header('location:ktm.php');
	}
    else if($company=="RoyalEnfield")
	{
		header('location:royalenf.php');
	}

	else
	{
		echo"WRONG USERNAME OR PASSWORD<br>TRY AGAIN";
	}


mysqli_close($con)
?>